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
 * 描述DLC托管存储基本信息
 *
 * @method string getName() 获取托管存储名称
 * @method void setName(string $Name) 设置托管存储名称
 * @method string getType() 获取托管存储类型
 * @method void setType(string $Type) 设置托管存储类型
 * @method float getSpaceUsedSize() 获取存储用量
 * @method void setSpaceUsedSize(float $SpaceUsedSize) 设置存储用量
 * @method integer getCreateTimeStamp() 获取创建时候的时间戳
 * @method void setCreateTimeStamp(integer $CreateTimeStamp) 设置创建时候的时间戳
 * @method integer getDefaultBucket() 获取是否是用户默认桶，0：默认桶，1：非默认桶
 * @method void setDefaultBucket(integer $DefaultBucket) 设置是否是用户默认桶，0：默认桶，1：非默认桶
 * @method string getShortName() 获取托管存储short name
 * @method void setShortName(string $ShortName) 设置托管存储short name
 * @method string getDescription() 获取桶描述信息
 * @method void setDescription(string $Description) 设置桶描述信息
 * @method string getStatus() 获取托管桶状态，当前取值为：creating、bind、readOnly、isolate
 * @method void setStatus(string $Status) 设置托管桶状态，当前取值为：creating、bind、readOnly、isolate
 * @method array getTagList() 获取托管存储桶标签列表
 * @method void setTagList(array $TagList) 设置托管存储桶标签列表
 */
class LakeFsInfo extends AbstractModel
{
    /**
     * @var string 托管存储名称
     */
    public $Name;

    /**
     * @var string 托管存储类型
     */
    public $Type;

    /**
     * @var float 存储用量
     */
    public $SpaceUsedSize;

    /**
     * @var integer 创建时候的时间戳
     */
    public $CreateTimeStamp;

    /**
     * @var integer 是否是用户默认桶，0：默认桶，1：非默认桶
     */
    public $DefaultBucket;

    /**
     * @var string 托管存储short name
     */
    public $ShortName;

    /**
     * @var string 桶描述信息
     */
    public $Description;

    /**
     * @var string 托管桶状态，当前取值为：creating、bind、readOnly、isolate
     */
    public $Status;

    /**
     * @var array 托管存储桶标签列表
     */
    public $TagList;

    /**
     * @param string $Name 托管存储名称
     * @param string $Type 托管存储类型
     * @param float $SpaceUsedSize 存储用量
     * @param integer $CreateTimeStamp 创建时候的时间戳
     * @param integer $DefaultBucket 是否是用户默认桶，0：默认桶，1：非默认桶
     * @param string $ShortName 托管存储short name
     * @param string $Description 桶描述信息
     * @param string $Status 托管桶状态，当前取值为：creating、bind、readOnly、isolate
     * @param array $TagList 托管存储桶标签列表
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

        if (array_key_exists("SpaceUsedSize",$param) and $param["SpaceUsedSize"] !== null) {
            $this->SpaceUsedSize = $param["SpaceUsedSize"];
        }

        if (array_key_exists("CreateTimeStamp",$param) and $param["CreateTimeStamp"] !== null) {
            $this->CreateTimeStamp = $param["CreateTimeStamp"];
        }

        if (array_key_exists("DefaultBucket",$param) and $param["DefaultBucket"] !== null) {
            $this->DefaultBucket = $param["DefaultBucket"];
        }

        if (array_key_exists("ShortName",$param) and $param["ShortName"] !== null) {
            $this->ShortName = $param["ShortName"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("TagList",$param) and $param["TagList"] !== null) {
            $this->TagList = [];
            foreach ($param["TagList"] as $key => $value){
                $obj = new TagInfo();
                $obj->deserialize($value);
                array_push($this->TagList, $obj);
            }
        }
    }
}
