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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 资产标签元素
 *
 * @method integer getID() 获取<p>标签ID</p>
 * @method void setID(integer $ID) 设置<p>标签ID</p>
 * @method integer getAppID() 获取<p>appid</p>
 * @method void setAppID(integer $AppID) 设置<p>appid</p>
 * @method string getTagKey() 获取<p>标签键</p>
 * @method void setTagKey(string $TagKey) 设置<p>标签键</p>
 * @method string getTagValue() 获取<p>标签值</p>
 * @method void setTagValue(string $TagValue) 设置<p>标签值</p>
 * @method string getDescription() 获取<p>描述</p>
 * @method void setDescription(string $Description) 设置<p>描述</p>
 * @method string getTaggingRule() 获取<p>自动打标策略</p>
 * @method void setTaggingRule(string $TaggingRule) 设置<p>自动打标策略</p>
 * @method string getColor() 获取<p>标签颜色</p>
 * @method void setColor(string $Color) 设置<p>标签颜色</p>
 * @method integer getAssetCount() 获取<p>标签绑定的资产数量</p>
 * @method void setAssetCount(integer $AssetCount) 设置<p>标签绑定的资产数量</p>
 * @method string getCreateTime() 获取<p>创建时间</p>
 * @method void setCreateTime(string $CreateTime) 设置<p>创建时间</p>
 * @method string getUpdateTime() 获取<p>更新时间</p>
 * @method void setUpdateTime(string $UpdateTime) 设置<p>更新时间</p>
 */
class AssetTagItem extends AbstractModel
{
    /**
     * @var integer <p>标签ID</p>
     */
    public $ID;

    /**
     * @var integer <p>appid</p>
     */
    public $AppID;

    /**
     * @var string <p>标签键</p>
     */
    public $TagKey;

    /**
     * @var string <p>标签值</p>
     */
    public $TagValue;

    /**
     * @var string <p>描述</p>
     */
    public $Description;

    /**
     * @var string <p>自动打标策略</p>
     */
    public $TaggingRule;

    /**
     * @var string <p>标签颜色</p>
     */
    public $Color;

    /**
     * @var integer <p>标签绑定的资产数量</p>
     */
    public $AssetCount;

    /**
     * @var string <p>创建时间</p>
     */
    public $CreateTime;

    /**
     * @var string <p>更新时间</p>
     */
    public $UpdateTime;

    /**
     * @param integer $ID <p>标签ID</p>
     * @param integer $AppID <p>appid</p>
     * @param string $TagKey <p>标签键</p>
     * @param string $TagValue <p>标签值</p>
     * @param string $Description <p>描述</p>
     * @param string $TaggingRule <p>自动打标策略</p>
     * @param string $Color <p>标签颜色</p>
     * @param integer $AssetCount <p>标签绑定的资产数量</p>
     * @param string $CreateTime <p>创建时间</p>
     * @param string $UpdateTime <p>更新时间</p>
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
        if (array_key_exists("ID",$param) and $param["ID"] !== null) {
            $this->ID = $param["ID"];
        }

        if (array_key_exists("AppID",$param) and $param["AppID"] !== null) {
            $this->AppID = $param["AppID"];
        }

        if (array_key_exists("TagKey",$param) and $param["TagKey"] !== null) {
            $this->TagKey = $param["TagKey"];
        }

        if (array_key_exists("TagValue",$param) and $param["TagValue"] !== null) {
            $this->TagValue = $param["TagValue"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("TaggingRule",$param) and $param["TaggingRule"] !== null) {
            $this->TaggingRule = $param["TaggingRule"];
        }

        if (array_key_exists("Color",$param) and $param["Color"] !== null) {
            $this->Color = $param["Color"];
        }

        if (array_key_exists("AssetCount",$param) and $param["AssetCount"] !== null) {
            $this->AssetCount = $param["AssetCount"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }
    }
}
