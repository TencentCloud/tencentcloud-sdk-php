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
 * 集群命名空间项
 *
 * @method integer getAppID() 获取<p>appid</p>
 * @method void setAppID(integer $AppID) 设置<p>appid</p>
 * @method string getName() 获取<p>名称</p>
 * @method void setName(string $Name) 设置<p>名称</p>
 * @method array getLabel() 获取<p>标签</p>
 * @method void setLabel(array $Label) 设置<p>标签</p>
 * @method string getCreateTime() 获取<p>创建时间</p>
 * @method void setCreateTime(string $CreateTime) 设置<p>创建时间</p>
 * @method string getAssetId() 获取<p>资产 ID</p>
 * @method void setAssetId(string $AssetId) 设置<p>资产 ID</p>
 * @method string getUniqueID() 获取<p>命名空间唯一标识ID</p>
 * @method void setUniqueID(string $UniqueID) 设置<p>命名空间唯一标识ID</p>
 */
class ClusterNamespaceListItem extends AbstractModel
{
    /**
     * @var integer <p>appid</p>
     */
    public $AppID;

    /**
     * @var string <p>名称</p>
     */
    public $Name;

    /**
     * @var array <p>标签</p>
     */
    public $Label;

    /**
     * @var string <p>创建时间</p>
     */
    public $CreateTime;

    /**
     * @var string <p>资产 ID</p>
     * @deprecated
     */
    public $AssetId;

    /**
     * @var string <p>命名空间唯一标识ID</p>
     */
    public $UniqueID;

    /**
     * @param integer $AppID <p>appid</p>
     * @param string $Name <p>名称</p>
     * @param array $Label <p>标签</p>
     * @param string $CreateTime <p>创建时间</p>
     * @param string $AssetId <p>资产 ID</p>
     * @param string $UniqueID <p>命名空间唯一标识ID</p>
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
        if (array_key_exists("AppID",$param) and $param["AppID"] !== null) {
            $this->AppID = $param["AppID"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Label",$param) and $param["Label"] !== null) {
            $this->Label = [];
            foreach ($param["Label"] as $key => $value){
                $obj = new AssetTag();
                $obj->deserialize($value);
                array_push($this->Label, $obj);
            }
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("AssetId",$param) and $param["AssetId"] !== null) {
            $this->AssetId = $param["AssetId"];
        }

        if (array_key_exists("UniqueID",$param) and $param["UniqueID"] !== null) {
            $this->UniqueID = $param["UniqueID"];
        }
    }
}
