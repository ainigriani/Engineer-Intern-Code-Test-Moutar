DECLARE @minTime DATETIME = (SELECT MIN(TransactionTime) FROM #tmp)
DECLARE @maxTime DATETIME = (SELECT MAX(TransactionTime) FROM #tmp)

DECLARE @tmp DATETIME = @minTime

WHILE @tmp < @maxTime
BEGIN
    IF @tmp > @maxTime 
        INSERT INTO #result VALUES (@tmp, DATEADD(HOUR,2,@maxTime))
    ELSE
        INSERT INTO #result VALUES (@tmp, DATEADD(HOUR,2,@tmp))
    SET @tmp = DATEADD(HOUR,2,@tmp)
END
