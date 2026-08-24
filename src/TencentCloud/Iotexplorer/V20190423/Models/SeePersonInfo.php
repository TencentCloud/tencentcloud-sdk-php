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
namespace TencentCloud\Iotexplorer\V20190423\Models;
use TencentCloud\Common\AbstractModel;

/**
 * TWeSee 人员信息
 *
 * @method array getFaces() 获取代表人脸列表
 * @method void setFaces(array $Faces) 设置代表人脸列表
 * @method boolean getIsRemembered() 获取是否已标记为持久记忆
 * @method void setIsRemembered(boolean $IsRemembered) 设置是否已标记为持久记忆
 * @method string getName() 获取人员名称
 * @method void setName(string $Name) 设置人员名称
 * @method string getPersonId() 获取人员 ID
 * @method void setPersonId(string $PersonId) 设置人员 ID
 * @method integer getSource() 获取创建来源。0：自动识别；1：用户创建
 * @method void setSource(integer $Source) 设置创建来源。0：自动识别；1：用户创建
 */
class SeePersonInfo extends AbstractModel
{
    /**
     * @var array 代表人脸列表
     */
    public $Faces;

    /**
     * @var boolean 是否已标记为持久记忆
     */
    public $IsRemembered;

    /**
     * @var string 人员名称
     */
    public $Name;

    /**
     * @var string 人员 ID
     */
    public $PersonId;

    /**
     * @var integer 创建来源。0：自动识别；1：用户创建
     */
    public $Source;

    /**
     * @param array $Faces 代表人脸列表
     * @param boolean $IsRemembered 是否已标记为持久记忆
     * @param string $Name 人员名称
     * @param string $PersonId 人员 ID
     * @param integer $Source 创建来源。0：自动识别；1：用户创建
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
        if (array_key_exists("Faces",$param) and $param["Faces"] !== null) {
            $this->Faces = [];
            foreach ($param["Faces"] as $key => $value){
                $obj = new SeeFaceInfo();
                $obj->deserialize($value);
                array_push($this->Faces, $obj);
            }
        }

        if (array_key_exists("IsRemembered",$param) and $param["IsRemembered"] !== null) {
            $this->IsRemembered = $param["IsRemembered"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("PersonId",$param) and $param["PersonId"] !== null) {
            $this->PersonId = $param["PersonId"];
        }

        if (array_key_exists("Source",$param) and $param["Source"] !== null) {
            $this->Source = $param["Source"];
        }
    }
}
