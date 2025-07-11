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
namespace TencentCloud\Tke\V20180525\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 超级节点
 *
 * @method string getDisplayName() 获取节点展示名称，建议不超过20个字符
 * @method void setDisplayName(string $DisplayName) 设置节点展示名称，建议不超过20个字符
 * @method string getSubnetId() 获取子网ID
 * @method void setSubnetId(string $SubnetId) 设置子网ID
 * @method array getTags() 获取腾讯云标签
 * @method void setTags(array $Tags) 设置腾讯云标签
 */
class VirtualNodeSpec extends AbstractModel
{
    /**
     * @var string 节点展示名称，建议不超过20个字符
     */
    public $DisplayName;

    /**
     * @var string 子网ID
     */
    public $SubnetId;

    /**
     * @var array 腾讯云标签
     */
    public $Tags;

    /**
     * @param string $DisplayName 节点展示名称，建议不超过20个字符
     * @param string $SubnetId 子网ID
     * @param array $Tags 腾讯云标签
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
        if (array_key_exists("DisplayName",$param) and $param["DisplayName"] !== null) {
            $this->DisplayName = $param["DisplayName"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }
    }
}
