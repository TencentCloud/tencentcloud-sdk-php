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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CheckModifyPartition请求参数结构体
 *
 * @method string getPartitionCode() 获取<p>分区编码</p>
 * @method void setPartitionCode(string $PartitionCode) 设置<p>分区编码</p>
 * @method array getTargetResourceQuotaList() 获取<p>目标资源配额列表（计费项+目标数量）</p>
 * @method void setTargetResourceQuotaList(array $TargetResourceQuotaList) 设置<p>目标资源配额列表（计费项+目标数量）</p>
 */
class CheckModifyPartitionRequest extends AbstractModel
{
    /**
     * @var string <p>分区编码</p>
     */
    public $PartitionCode;

    /**
     * @var array <p>目标资源配额列表（计费项+目标数量）</p>
     */
    public $TargetResourceQuotaList;

    /**
     * @param string $PartitionCode <p>分区编码</p>
     * @param array $TargetResourceQuotaList <p>目标资源配额列表（计费项+目标数量）</p>
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
        if (array_key_exists("PartitionCode",$param) and $param["PartitionCode"] !== null) {
            $this->PartitionCode = $param["PartitionCode"];
        }

        if (array_key_exists("TargetResourceQuotaList",$param) and $param["TargetResourceQuotaList"] !== null) {
            $this->TargetResourceQuotaList = [];
            foreach ($param["TargetResourceQuotaList"] as $key => $value){
                $obj = new ResourceQuota();
                $obj->deserialize($value);
                array_push($this->TargetResourceQuotaList, $obj);
            }
        }
    }
}
