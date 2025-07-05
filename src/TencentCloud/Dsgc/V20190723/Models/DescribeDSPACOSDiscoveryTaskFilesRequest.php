<?php
/*
 * Copyright (c) 2017-2025 Tencent. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace TencentCloud\Dsgc\V20190723\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDSPACOSDiscoveryTaskFiles请求参数结构体
 *
 * @method string getDspaId() 获取DSPA实例Id
 * @method void setDspaId(string $DspaId) 设置DSPA实例Id
 * @method integer getTaskId() 获取扫描任务ID
 * @method void setTaskId(integer $TaskId) 设置扫描任务ID
 * @method integer getBucketResultId() 获取扫描Bucket任务结果ID
 * @method void setBucketResultId(integer $BucketResultId) 设置扫描Bucket任务结果ID
 * @method integer getScanResultId() 获取扫描结果id
 * @method void setScanResultId(integer $ScanResultId) 设置扫描结果id
 */
class DescribeDSPACOSDiscoveryTaskFilesRequest extends AbstractModel
{
    /**
     * @var string DSPA实例Id
     */
    public $DspaId;

    /**
     * @var integer 扫描任务ID
     */
    public $TaskId;

    /**
     * @var integer 扫描Bucket任务结果ID
     * @deprecated
     */
    public $BucketResultId;

    /**
     * @var integer 扫描结果id
     */
    public $ScanResultId;

    /**
     * @param string $DspaId DSPA实例Id
     * @param integer $TaskId 扫描任务ID
     * @param integer $BucketResultId 扫描Bucket任务结果ID
     * @param integer $ScanResultId 扫描结果id
     */
    function __construct()
    {

    }

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("DspaId",$param) and $param["DspaId"] !== null) {
            $this->DspaId = $param["DspaId"];
        }

        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("BucketResultId",$param) and $param["BucketResultId"] !== null) {
            $this->BucketResultId = $param["BucketResultId"];
        }

        if (array_key_exists("ScanResultId",$param) and $param["ScanResultId"] !== null) {
            $this->ScanResultId = $param["ScanResultId"];
        }
    }
}
