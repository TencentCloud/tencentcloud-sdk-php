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
namespace TencentCloud\Vclm\V20240523\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateAigcElement请求参数结构体
 *
 * @method string getName() 获取
 * @method void setName(string $Name) 设置
 * @method string getDescription() 获取
 * @method void setDescription(string $Description) 设置
 * @method string getReferenceType() 获取
 * @method void setReferenceType(string $ReferenceType) 设置
 * @method ElementImageList getElementImageList() 获取
 * @method void setElementImageList(ElementImageList $ElementImageList) 设置
 * @method array getVideoList() 获取
 * @method void setVideoList(array $VideoList) 设置
 * @method array getProvider() 获取
 * @method void setProvider(array $Provider) 设置
 * @method array getTagList() 获取
 * @method void setTagList(array $TagList) 设置
 */
class CreateAigcElementRequest extends AbstractModel
{
    /**
     * @var string 
     */
    public $Name;

    /**
     * @var string 
     */
    public $Description;

    /**
     * @var string 
     */
    public $ReferenceType;

    /**
     * @var ElementImageList 
     */
    public $ElementImageList;

    /**
     * @var array 
     */
    public $VideoList;

    /**
     * @var array 
     */
    public $Provider;

    /**
     * @var array 
     */
    public $TagList;

    /**
     * @param string $Name 
     * @param string $Description 
     * @param string $ReferenceType 
     * @param ElementImageList $ElementImageList 
     * @param array $VideoList 
     * @param array $Provider 
     * @param array $TagList 
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

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("ReferenceType",$param) and $param["ReferenceType"] !== null) {
            $this->ReferenceType = $param["ReferenceType"];
        }

        if (array_key_exists("ElementImageList",$param) and $param["ElementImageList"] !== null) {
            $this->ElementImageList = new ElementImageList();
            $this->ElementImageList->deserialize($param["ElementImageList"]);
        }

        if (array_key_exists("VideoList",$param) and $param["VideoList"] !== null) {
            $this->VideoList = $param["VideoList"];
        }

        if (array_key_exists("Provider",$param) and $param["Provider"] !== null) {
            $this->Provider = $param["Provider"];
        }

        if (array_key_exists("TagList",$param) and $param["TagList"] !== null) {
            $this->TagList = [];
            foreach ($param["TagList"] as $key => $value){
                $obj = new TagList();
                $obj->deserialize($value);
                array_push($this->TagList, $obj);
            }
        }
    }
}
