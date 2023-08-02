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
namespace TencentCloud\Goosefs\V20220519\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateFileSystem请求参数结构体
 *
 * @method string getType() 获取文件系统类型, 可填goosefs和goosefsx
 * @method void setType(string $Type) 设置文件系统类型, 可填goosefs和goosefsx
 * @method string getName() 获取文件系统名
 * @method void setName(string $Name) 设置文件系统名
 * @method string getDescription() 获取文件系统备注描述
 * @method void setDescription(string $Description) 设置文件系统备注描述
 * @method string getVpcId() 获取vpc网络ID
 * @method void setVpcId(string $VpcId) 设置vpc网络ID
 * @method string getSubnetId() 获取子网ID
 * @method void setSubnetId(string $SubnetId) 设置子网ID
 * @method string getZone() 获取子网所在的可用区
 * @method void setZone(string $Zone) 设置子网所在的可用区
 * @method array getTag() 获取文件系统关联的tag
 * @method void setTag(array $Tag) 设置文件系统关联的tag
 * @method GooseFSxBuildElement getGooseFSxBuildElements() 获取GooseFSx构建时要传递的参数
 * @method void setGooseFSxBuildElements(GooseFSxBuildElement $GooseFSxBuildElements) 设置GooseFSx构建时要传递的参数
 */
class CreateFileSystemRequest extends AbstractModel
{
    /**
     * @var string 文件系统类型, 可填goosefs和goosefsx
     */
    public $Type;

    /**
     * @var string 文件系统名
     */
    public $Name;

    /**
     * @var string 文件系统备注描述
     */
    public $Description;

    /**
     * @var string vpc网络ID
     */
    public $VpcId;

    /**
     * @var string 子网ID
     */
    public $SubnetId;

    /**
     * @var string 子网所在的可用区
     */
    public $Zone;

    /**
     * @var array 文件系统关联的tag
     */
    public $Tag;

    /**
     * @var GooseFSxBuildElement GooseFSx构建时要传递的参数
     */
    public $GooseFSxBuildElements;

    /**
     * @param string $Type 文件系统类型, 可填goosefs和goosefsx
     * @param string $Name 文件系统名
     * @param string $Description 文件系统备注描述
     * @param string $VpcId vpc网络ID
     * @param string $SubnetId 子网ID
     * @param string $Zone 子网所在的可用区
     * @param array $Tag 文件系统关联的tag
     * @param GooseFSxBuildElement $GooseFSxBuildElements GooseFSx构建时要传递的参数
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("Tag",$param) and $param["Tag"] !== null) {
            $this->Tag = [];
            foreach ($param["Tag"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tag, $obj);
            }
        }

        if (array_key_exists("GooseFSxBuildElements",$param) and $param["GooseFSxBuildElements"] !== null) {
            $this->GooseFSxBuildElements = new GooseFSxBuildElement();
            $this->GooseFSxBuildElements->deserialize($param["GooseFSxBuildElements"]);
        }
    }
}
