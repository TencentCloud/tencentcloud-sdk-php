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
namespace TencentCloud\Vpc\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 资源统计项。
 *
 * @method string getResourceType() 获取资源类型。比如，CVM，ENI等。
 * @method void setResourceType(string $ResourceType) 设置资源类型。比如，CVM，ENI等。
 * @method string getResourceName() 获取资源名称。
 * @method void setResourceName(string $ResourceName) 设置资源名称。
 * @method integer getResourceCount() 获取资源个数。
 * @method void setResourceCount(integer $ResourceCount) 设置资源个数。
 */
class ResourceStatisticsItem extends AbstractModel
{
    /**
     * @var string 资源类型。比如，CVM，ENI等。
     */
    public $ResourceType;

    /**
     * @var string 资源名称。
     */
    public $ResourceName;

    /**
     * @var integer 资源个数。
     */
    public $ResourceCount;

    /**
     * @param string $ResourceType 资源类型。比如，CVM，ENI等。
     * @param string $ResourceName 资源名称。
     * @param integer $ResourceCount 资源个数。
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
        if (array_key_exists("ResourceType",$param) and $param["ResourceType"] !== null) {
            $this->ResourceType = $param["ResourceType"];
        }

        if (array_key_exists("ResourceName",$param) and $param["ResourceName"] !== null) {
            $this->ResourceName = $param["ResourceName"];
        }

        if (array_key_exists("ResourceCount",$param) and $param["ResourceCount"] !== null) {
            $this->ResourceCount = $param["ResourceCount"];
        }
    }
}
