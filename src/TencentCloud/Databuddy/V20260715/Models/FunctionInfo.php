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
namespace TencentCloud\Databuddy\V20260715\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 函数详情
 *
 * @method string getName() 获取<p>函数名</p>
 * @method void setName(string $Name) 设置<p>函数名</p>
 * @method string getFunctionType() 获取函数类型，取值如JAVA、SCALA、PYTHON、SQL等
 * @method void setFunctionType(string $FunctionType) 设置函数类型，取值如JAVA、SCALA、PYTHON、SQL等
 * @method string getEngineType() 获取引擎类型，取值如SPARK、HIVE、PRESTO等
 * @method void setEngineType(string $EngineType) 设置引擎类型，取值如SPARK、HIVE、PRESTO等
 * @method string getClassName() 获取<p>类名</p>
 * @method void setClassName(string $ClassName) 设置<p>类名</p>
 * @method array getResources() 获取<p>函数依赖的资源</p>
 * @method void setResources(array $Resources) 设置<p>函数依赖的资源</p>
 * @method string getComment() 获取<p>描述</p>
 * @method void setComment(string $Comment) 设置<p>描述</p>
 * @method array getProperties() 获取<p>属性</p>
 * @method void setProperties(array $Properties) 设置<p>属性</p>
 * @method Audit getAudit() 获取<p>审计信息</p>
 * @method void setAudit(Audit $Audit) 设置<p>审计信息</p>
 * @method MetaOwner getMetaOwner() 获取<p>owner信息</p>
 * @method void setMetaOwner(MetaOwner $MetaOwner) 设置<p>owner信息</p>
 * @method string getAssetGuid() 获取<p>资产全局唯一ID</p>
 * @method void setAssetGuid(string $AssetGuid) 设置<p>资产全局唯一ID</p>
 * @method PermissionDetail getPermissionDetail() 获取<p>当前用户对该实体的权限信息</p>
 * @method void setPermissionDetail(PermissionDetail $PermissionDetail) 设置<p>当前用户对该实体的权限信息</p>
 * @method array getTags() 获取<p>标签信息列表。注意：仅当请求中 FetchTags=true 时返回，默认不返回</p>
 * @method void setTags(array $Tags) 设置<p>标签信息列表。注意：仅当请求中 FetchTags=true 时返回，默认不返回</p>
 */
class FunctionInfo extends AbstractModel
{
    /**
     * @var string <p>函数名</p>
     */
    public $Name;

    /**
     * @var string 函数类型，取值如JAVA、SCALA、PYTHON、SQL等
     */
    public $FunctionType;

    /**
     * @var string 引擎类型，取值如SPARK、HIVE、PRESTO等
     */
    public $EngineType;

    /**
     * @var string <p>类名</p>
     */
    public $ClassName;

    /**
     * @var array <p>函数依赖的资源</p>
     */
    public $Resources;

    /**
     * @var string <p>描述</p>
     */
    public $Comment;

    /**
     * @var array <p>属性</p>
     */
    public $Properties;

    /**
     * @var Audit <p>审计信息</p>
     */
    public $Audit;

    /**
     * @var MetaOwner <p>owner信息</p>
     */
    public $MetaOwner;

    /**
     * @var string <p>资产全局唯一ID</p>
     */
    public $AssetGuid;

    /**
     * @var PermissionDetail <p>当前用户对该实体的权限信息</p>
     */
    public $PermissionDetail;

    /**
     * @var array <p>标签信息列表。注意：仅当请求中 FetchTags=true 时返回，默认不返回</p>
     */
    public $Tags;

    /**
     * @param string $Name <p>函数名</p>
     * @param string $FunctionType 函数类型，取值如JAVA、SCALA、PYTHON、SQL等
     * @param string $EngineType 引擎类型，取值如SPARK、HIVE、PRESTO等
     * @param string $ClassName <p>类名</p>
     * @param array $Resources <p>函数依赖的资源</p>
     * @param string $Comment <p>描述</p>
     * @param array $Properties <p>属性</p>
     * @param Audit $Audit <p>审计信息</p>
     * @param MetaOwner $MetaOwner <p>owner信息</p>
     * @param string $AssetGuid <p>资产全局唯一ID</p>
     * @param PermissionDetail $PermissionDetail <p>当前用户对该实体的权限信息</p>
     * @param array $Tags <p>标签信息列表。注意：仅当请求中 FetchTags=true 时返回，默认不返回</p>
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

        if (array_key_exists("FunctionType",$param) and $param["FunctionType"] !== null) {
            $this->FunctionType = $param["FunctionType"];
        }

        if (array_key_exists("EngineType",$param) and $param["EngineType"] !== null) {
            $this->EngineType = $param["EngineType"];
        }

        if (array_key_exists("ClassName",$param) and $param["ClassName"] !== null) {
            $this->ClassName = $param["ClassName"];
        }

        if (array_key_exists("Resources",$param) and $param["Resources"] !== null) {
            $this->Resources = [];
            foreach ($param["Resources"] as $key => $value){
                $obj = new FunctionResource();
                $obj->deserialize($value);
                array_push($this->Resources, $obj);
            }
        }

        if (array_key_exists("Comment",$param) and $param["Comment"] !== null) {
            $this->Comment = $param["Comment"];
        }

        if (array_key_exists("Properties",$param) and $param["Properties"] !== null) {
            $this->Properties = [];
            foreach ($param["Properties"] as $key => $value){
                $obj = new KVPair();
                $obj->deserialize($value);
                array_push($this->Properties, $obj);
            }
        }

        if (array_key_exists("Audit",$param) and $param["Audit"] !== null) {
            $this->Audit = new Audit();
            $this->Audit->deserialize($param["Audit"]);
        }

        if (array_key_exists("MetaOwner",$param) and $param["MetaOwner"] !== null) {
            $this->MetaOwner = new MetaOwner();
            $this->MetaOwner->deserialize($param["MetaOwner"]);
        }

        if (array_key_exists("AssetGuid",$param) and $param["AssetGuid"] !== null) {
            $this->AssetGuid = $param["AssetGuid"];
        }

        if (array_key_exists("PermissionDetail",$param) and $param["PermissionDetail"] !== null) {
            $this->PermissionDetail = new PermissionDetail();
            $this->PermissionDetail->deserialize($param["PermissionDetail"]);
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new CommonTagInfo();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }
    }
}
