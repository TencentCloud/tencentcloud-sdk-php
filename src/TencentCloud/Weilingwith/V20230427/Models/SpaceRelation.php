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
namespace TencentCloud\Weilingwith\V20230427\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 空间层级关系
 *
 * @method string getElementId() 获取构件id
 * @method void setElementId(string $ElementId) 设置构件id
 * @method string getElementName() 获取构件名称
 * @method void setElementName(string $ElementName) 设置构件名称
 * @method integer getLevel() 获取空间层级
 * @method void setLevel(integer $Level) 设置空间层级
 * @method string getSpaceCode() 获取空间编码
 * @method void setSpaceCode(string $SpaceCode) 设置空间编码
 * @method string getParentSpaceCode() 获取父级空间编码
 * @method void setParentSpaceCode(string $ParentSpaceCode) 设置父级空间编码
 * @method array getChildren() 获取子构件信息
 * @method void setChildren(array $Children) 设置子构件信息
 */
class SpaceRelation extends AbstractModel
{
    /**
     * @var string 构件id
     */
    public $ElementId;

    /**
     * @var string 构件名称
     */
    public $ElementName;

    /**
     * @var integer 空间层级
     */
    public $Level;

    /**
     * @var string 空间编码
     */
    public $SpaceCode;

    /**
     * @var string 父级空间编码
     */
    public $ParentSpaceCode;

    /**
     * @var array 子构件信息
     */
    public $Children;

    /**
     * @param string $ElementId 构件id
     * @param string $ElementName 构件名称
     * @param integer $Level 空间层级
     * @param string $SpaceCode 空间编码
     * @param string $ParentSpaceCode 父级空间编码
     * @param array $Children 子构件信息
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
        if (array_key_exists("ElementId",$param) and $param["ElementId"] !== null) {
            $this->ElementId = $param["ElementId"];
        }

        if (array_key_exists("ElementName",$param) and $param["ElementName"] !== null) {
            $this->ElementName = $param["ElementName"];
        }

        if (array_key_exists("Level",$param) and $param["Level"] !== null) {
            $this->Level = $param["Level"];
        }

        if (array_key_exists("SpaceCode",$param) and $param["SpaceCode"] !== null) {
            $this->SpaceCode = $param["SpaceCode"];
        }

        if (array_key_exists("ParentSpaceCode",$param) and $param["ParentSpaceCode"] !== null) {
            $this->ParentSpaceCode = $param["ParentSpaceCode"];
        }

        if (array_key_exists("Children",$param) and $param["Children"] !== null) {
            $this->Children = [];
            foreach ($param["Children"] as $key => $value){
                $obj = new SpaceRelation();
                $obj->deserialize($value);
                array_push($this->Children, $obj);
            }
        }
    }
}
