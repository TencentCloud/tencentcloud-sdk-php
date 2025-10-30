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
namespace TencentCloud\Ssl\V20191205\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeHostUpdateRecordDetail请求参数结构体
 *
 * @method string getDeployRecordId() 获取部署记录ID，通过调用UpdateCertificateInstance接口返回的记录ID， 或者通过UpdateCertificateRecordRollback回滚接口返回的记录ID
 * @method void setDeployRecordId(string $DeployRecordId) 设置部署记录ID，通过调用UpdateCertificateInstance接口返回的记录ID， 或者通过UpdateCertificateRecordRollback回滚接口返回的记录ID
 * @method string getLimit() 获取每页数量，默认10。最大值为200
 * @method void setLimit(string $Limit) 设置每页数量，默认10。最大值为200
 * @method string getOffset() 获取分页偏移量，从0开始。默认为0
 * @method void setOffset(string $Offset) 设置分页偏移量，从0开始。默认为0
 */
class DescribeHostUpdateRecordDetailRequest extends AbstractModel
{
    /**
     * @var string 部署记录ID，通过调用UpdateCertificateInstance接口返回的记录ID， 或者通过UpdateCertificateRecordRollback回滚接口返回的记录ID
     */
    public $DeployRecordId;

    /**
     * @var string 每页数量，默认10。最大值为200
     */
    public $Limit;

    /**
     * @var string 分页偏移量，从0开始。默认为0
     */
    public $Offset;

    /**
     * @param string $DeployRecordId 部署记录ID，通过调用UpdateCertificateInstance接口返回的记录ID， 或者通过UpdateCertificateRecordRollback回滚接口返回的记录ID
     * @param string $Limit 每页数量，默认10。最大值为200
     * @param string $Offset 分页偏移量，从0开始。默认为0
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
        if (array_key_exists("DeployRecordId",$param) and $param["DeployRecordId"] !== null) {
            $this->DeployRecordId = $param["DeployRecordId"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }
    }
}
