<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
 * DescribeDSPACOSDataAssetBuckets请求参数结构体
 *
 * @method string getDspaId() 获取DSPA实例Id
 * @method void setDspaId(string $DspaId) 设置DSPA实例Id
 * @method integer getComplianceId() 获取合规组Id
 * @method void setComplianceId(integer $ComplianceId) 设置合规组Id
 */
class DescribeDSPACOSDataAssetBucketsRequest extends AbstractModel
{
    /**
     * @var string DSPA实例Id
     */
    public $DspaId;

    /**
     * @var integer 合规组Id
     */
    public $ComplianceId;

    /**
     * @param string $DspaId DSPA实例Id
     * @param integer $ComplianceId 合规组Id
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

        if (array_key_exists("ComplianceId",$param) and $param["ComplianceId"] !== null) {
            $this->ComplianceId = $param["ComplianceId"];
        }
    }
}
