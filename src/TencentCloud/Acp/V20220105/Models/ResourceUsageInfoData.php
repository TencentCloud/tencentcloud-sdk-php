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
namespace TencentCloud\Acp\V20220105\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 资源使用情况信息
 *
 * @method string getResourceName() 获取资源计费项名称
 * @method void setResourceName(string $ResourceName) 设置资源计费项名称
 * @method integer getTotal() 获取资源总数
 * @method void setTotal(integer $Total) 设置资源总数
 * @method integer getUnusedCount() 获取未使用资源数
 * @method void setUnusedCount(integer $UnusedCount) 设置未使用资源数
 */
class ResourceUsageInfoData extends AbstractModel
{
    /**
     * @var string 资源计费项名称
     */
    public $ResourceName;

    /**
     * @var integer 资源总数
     */
    public $Total;

    /**
     * @var integer 未使用资源数
     */
    public $UnusedCount;

    /**
     * @param string $ResourceName 资源计费项名称
     * @param integer $Total 资源总数
     * @param integer $UnusedCount 未使用资源数
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
        if (array_key_exists("ResourceName",$param) and $param["ResourceName"] !== null) {
            $this->ResourceName = $param["ResourceName"];
        }

        if (array_key_exists("Total",$param) and $param["Total"] !== null) {
            $this->Total = $param["Total"];
        }

        if (array_key_exists("UnusedCount",$param) and $param["UnusedCount"] !== null) {
            $this->UnusedCount = $param["UnusedCount"];
        }
    }
}
