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
namespace TencentCloud\Teo\V20220106\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateZone请求参数结构体
 *
 * @method string getName() 获取站点名字
 * @method void setName(string $Name) 设置站点名字
 * @method string getType() 获取接入方式，默认full
- full NS接入
- partial CNAME接入
 * @method void setType(string $Type) 设置接入方式，默认full
- full NS接入
- partial CNAME接入
 * @method boolean getJumpStart() 获取是否跳过站点历史解析记录扫描
 * @method void setJumpStart(boolean $JumpStart) 设置是否跳过站点历史解析记录扫描
 * @method array getTags() 获取资源标签
 * @method void setTags(array $Tags) 设置资源标签
 */
class CreateZoneRequest extends AbstractModel
{
    /**
     * @var string 站点名字
     */
    public $Name;

    /**
     * @var string 接入方式，默认full
- full NS接入
- partial CNAME接入
     */
    public $Type;

    /**
     * @var boolean 是否跳过站点历史解析记录扫描
     */
    public $JumpStart;

    /**
     * @var array 资源标签
     */
    public $Tags;

    /**
     * @param string $Name 站点名字
     * @param string $Type 接入方式，默认full
- full NS接入
- partial CNAME接入
     * @param boolean $JumpStart 是否跳过站点历史解析记录扫描
     * @param array $Tags 资源标签
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("JumpStart",$param) and $param["JumpStart"] !== null) {
            $this->JumpStart = $param["JumpStart"];
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
