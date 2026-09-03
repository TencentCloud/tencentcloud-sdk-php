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
 * @method string getName() 获取<p>托管存储名称</p>
 * @method void setName(string $Name) 设置<p>托管存储名称</p>
 * @method string getType() 获取<p>托管存储类型</p>
 * @method void setType(string $Type) 设置<p>托管存储类型</p>
 * @method float getSpaceUsedSize() 获取<p>存储用量</p>
 * @method void setSpaceUsedSize(float $SpaceUsedSize) 设置<p>存储用量</p>
 * @method integer getCreateTimeStamp() 获取<p>创建时候的时间戳</p>
 * @method void setCreateTimeStamp(integer $CreateTimeStamp) 设置<p>创建时候的时间戳</p>
 * @method integer getDefaultBucket() 获取<p>是否是用户默认桶，0：默认桶，1：非默认桶</p>
 * @method void setDefaultBucket(integer $DefaultBucket) 设置<p>是否是用户默认桶，0：默认桶，1：非默认桶</p>
 * @method string getShortName() 获取<p>托管存储short name</p>
 * @method void setShortName(string $ShortName) 设置<p>托管存储short name</p>
 * @method string getDescription() 获取<p>桶描述信息</p>
 * @method void setDescription(string $Description) 设置<p>桶描述信息</p>
 * @method string getStatus() 获取<p>托管桶状态，当前取值为：creating、bind、readOnly、isolate</p>
 * @method void setStatus(string $Status) 设置<p>托管桶状态，当前取值为：creating、bind、readOnly、isolate</p>
 * @method array getTagList() 获取<p>托管存储桶标签列表</p>
 * @method void setTagList(array $TagList) 设置<p>托管存储桶标签列表</p>
 * @method boolean getMultiAZ() 获取<p>是否是多AZ存储桶</p>
 * @method void setMultiAZ(boolean $MultiAZ) 设置<p>是否是多AZ存储桶</p>
 * @method array getConfiguration() 获取<p>存储桶配置信息</p>
 * @method void setConfiguration(array $Configuration) 设置<p>存储桶配置信息</p>
 */
class LakeFsInfo extends AbstractModel
{
    /**
     * @var string <p>托管存储名称</p>
     */
    public $Name;

    /**
     * @var string <p>托管存储类型</p>
     */
    public $Type;

    /**
     * @var float <p>存储用量</p>
     */
    public $SpaceUsedSize;

    /**
     * @var integer <p>创建时候的时间戳</p>
     */
    public $CreateTimeStamp;

    /**
     * @var integer <p>是否是用户默认桶，0：默认桶，1：非默认桶</p>
     */
    public $DefaultBucket;

    /**
     * @var string <p>托管存储short name</p>
     */
    public $ShortName;

    /**
     * @var string <p>桶描述信息</p>
     */
    public $Description;

    /**
     * @var string <p>托管桶状态，当前取值为：creating、bind、readOnly、isolate</p>
     */
    public $Status;

    /**
     * @var array <p>托管存储桶标签列表</p>
     */
    public $TagList;

    /**
     * @var boolean <p>是否是多AZ存储桶</p>
     */
    public $MultiAZ;

    /**
     * @var array <p>存储桶配置信息</p>
     */
    public $Configuration;

    /**
     * @param string $Name <p>托管存储名称</p>
     * @param string $Type <p>托管存储类型</p>
     * @param float $SpaceUsedSize <p>存储用量</p>
     * @param integer $CreateTimeStamp <p>创建时候的时间戳</p>
     * @param integer $DefaultBucket <p>是否是用户默认桶，0：默认桶，1：非默认桶</p>
     * @param string $ShortName <p>托管存储short name</p>
     * @param string $Description <p>桶描述信息</p>
     * @param string $Status <p>托管桶状态，当前取值为：creating、bind、readOnly、isolate</p>
     * @param array $TagList <p>托管存储桶标签列表</p>
     * @param boolean $MultiAZ <p>是否是多AZ存储桶</p>
     * @param array $Configuration <p>存储桶配置信息</p>
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

        if (array_key_exists("MultiAZ",$param) and $param["MultiAZ"] !== null) {
            $this->MultiAZ = $param["MultiAZ"];
        }

        if (array_key_exists("Configuration",$param) and $param["Configuration"] !== null) {
            $this->Configuration = [];
            foreach ($param["Configuration"] as $key => $value){
                $obj = new KVPair();
                $obj->deserialize($value);
                array_push($this->Configuration, $obj);
            }
        }
    }
}
