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
namespace TencentCloud\Es\V20180416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Serverless索引空间信息
 *
 * @method string getSpaceId() 获取<p>Serverless索引空间ID</p>
 * @method void setSpaceId(string $SpaceId) 设置<p>Serverless索引空间ID</p>
 * @method string getSpaceName() 获取<p>Serverless索引空间名</p>
 * @method void setSpaceName(string $SpaceName) 设置<p>Serverless索引空间名</p>
 * @method integer getStatus() 获取<p>Serverless索引空间状态</p><p>枚举值：</p><ul><li>0： 创建中</li><li>1： 正常</li><li>2： 流程中</li><li>-3： 已删除</li><li>-4： 隔离中</li></ul>
 * @method void setStatus(integer $Status) 设置<p>Serverless索引空间状态</p><p>枚举值：</p><ul><li>0： 创建中</li><li>1： 正常</li><li>2： 流程中</li><li>-3： 已删除</li><li>-4： 隔离中</li></ul>
 * @method string getCreateTime() 获取<p>创建日期</p>
 * @method void setCreateTime(string $CreateTime) 设置<p>创建日期</p>
 * @method integer getIndexCount() 获取<p>空间内索引数量</p>
 * @method void setIndexCount(integer $IndexCount) 设置<p>空间内索引数量</p>
 * @method string getKibanaUrl() 获取<p>kibana公网uri</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setKibanaUrl(string $KibanaUrl) 设置<p>kibana公网uri</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getKibanaPrivateUrl() 获取<p>kibana内网url</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setKibanaPrivateUrl(string $KibanaPrivateUrl) 设置<p>kibana内网url</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getIndexAccessUrl() 获取<p>空间内网访问地址</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIndexAccessUrl(string $IndexAccessUrl) 设置<p>空间内网访问地址</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method EsAcl getKibanaPublicAcl() 获取<p>空间白名单</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setKibanaPublicAcl(EsAcl $KibanaPublicAcl) 设置<p>空间白名单</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getKibanaEmbedUrl() 获取<p>空间检索分析域名</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setKibanaEmbedUrl(string $KibanaEmbedUrl) 设置<p>空间检索分析域名</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method DiData getDiDataList() 获取<p>数据联路</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDiDataList(DiData $DiDataList) 设置<p>数据联路</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getVpcInfo() 获取<p>空间vpc信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVpcInfo(array $VpcInfo) 设置<p>空间vpc信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRegion() 获取<p>地域</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRegion(string $Region) 设置<p>地域</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getZone() 获取<p>可用区</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setZone(string $Zone) 设置<p>可用区</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getEnableKibanaPublicAccess() 获取<p>kibana公网开关，0关闭，1开启</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEnableKibanaPublicAccess(integer $EnableKibanaPublicAccess) 设置<p>kibana公网开关，0关闭，1开启</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getEnableKibanaPrivateAccess() 获取<p>kibana内网开关，0关闭，1开启</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEnableKibanaPrivateAccess(integer $EnableKibanaPrivateAccess) 设置<p>kibana内网开关，0关闭，1开启</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getAppId() 获取<p>空间所属appid</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAppId(integer $AppId) 设置<p>空间所属appid</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getKibanaLanguage() 获取<p>//默认en， 可选zh-CN</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setKibanaLanguage(string $KibanaLanguage) 设置<p>//默认en， 可选zh-CN</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getClusterType() 获取<p>0</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setClusterType(integer $ClusterType) 设置<p>0</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getTagList() 获取<p>空间标签信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTagList(array $TagList) 设置<p>空间标签信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getEnableMcpAccess() 获取<p>是否开启mcp服务</p>
 * @method void setEnableMcpAccess(integer $EnableMcpAccess) 设置<p>是否开启mcp服务</p>
 * @method string getMcpAccess() 获取<p>mcp的访问地址</p>
 * @method void setMcpAccess(string $McpAccess) 设置<p>mcp的访问地址</p>
 */
class ServerlessSpace extends AbstractModel
{
    /**
     * @var string <p>Serverless索引空间ID</p>
     */
    public $SpaceId;

    /**
     * @var string <p>Serverless索引空间名</p>
     */
    public $SpaceName;

    /**
     * @var integer <p>Serverless索引空间状态</p><p>枚举值：</p><ul><li>0： 创建中</li><li>1： 正常</li><li>2： 流程中</li><li>-3： 已删除</li><li>-4： 隔离中</li></ul>
     */
    public $Status;

    /**
     * @var string <p>创建日期</p>
     */
    public $CreateTime;

    /**
     * @var integer <p>空间内索引数量</p>
     */
    public $IndexCount;

    /**
     * @var string <p>kibana公网uri</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $KibanaUrl;

    /**
     * @var string <p>kibana内网url</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $KibanaPrivateUrl;

    /**
     * @var string <p>空间内网访问地址</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IndexAccessUrl;

    /**
     * @var EsAcl <p>空间白名单</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $KibanaPublicAcl;

    /**
     * @var string <p>空间检索分析域名</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $KibanaEmbedUrl;

    /**
     * @var DiData <p>数据联路</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DiDataList;

    /**
     * @var array <p>空间vpc信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VpcInfo;

    /**
     * @var string <p>地域</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Region;

    /**
     * @var string <p>可用区</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Zone;

    /**
     * @var integer <p>kibana公网开关，0关闭，1开启</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EnableKibanaPublicAccess;

    /**
     * @var integer <p>kibana内网开关，0关闭，1开启</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EnableKibanaPrivateAccess;

    /**
     * @var integer <p>空间所属appid</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AppId;

    /**
     * @var string <p>//默认en， 可选zh-CN</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $KibanaLanguage;

    /**
     * @var integer <p>0</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ClusterType;

    /**
     * @var array <p>空间标签信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TagList;

    /**
     * @var integer <p>是否开启mcp服务</p>
     */
    public $EnableMcpAccess;

    /**
     * @var string <p>mcp的访问地址</p>
     */
    public $McpAccess;

    /**
     * @param string $SpaceId <p>Serverless索引空间ID</p>
     * @param string $SpaceName <p>Serverless索引空间名</p>
     * @param integer $Status <p>Serverless索引空间状态</p><p>枚举值：</p><ul><li>0： 创建中</li><li>1： 正常</li><li>2： 流程中</li><li>-3： 已删除</li><li>-4： 隔离中</li></ul>
     * @param string $CreateTime <p>创建日期</p>
     * @param integer $IndexCount <p>空间内索引数量</p>
     * @param string $KibanaUrl <p>kibana公网uri</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $KibanaPrivateUrl <p>kibana内网url</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $IndexAccessUrl <p>空间内网访问地址</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param EsAcl $KibanaPublicAcl <p>空间白名单</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $KibanaEmbedUrl <p>空间检索分析域名</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param DiData $DiDataList <p>数据联路</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $VpcInfo <p>空间vpc信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Region <p>地域</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Zone <p>可用区</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $EnableKibanaPublicAccess <p>kibana公网开关，0关闭，1开启</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $EnableKibanaPrivateAccess <p>kibana内网开关，0关闭，1开启</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $AppId <p>空间所属appid</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $KibanaLanguage <p>//默认en， 可选zh-CN</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ClusterType <p>0</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $TagList <p>空间标签信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $EnableMcpAccess <p>是否开启mcp服务</p>
     * @param string $McpAccess <p>mcp的访问地址</p>
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
        if (array_key_exists("SpaceId",$param) and $param["SpaceId"] !== null) {
            $this->SpaceId = $param["SpaceId"];
        }

        if (array_key_exists("SpaceName",$param) and $param["SpaceName"] !== null) {
            $this->SpaceName = $param["SpaceName"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("IndexCount",$param) and $param["IndexCount"] !== null) {
            $this->IndexCount = $param["IndexCount"];
        }

        if (array_key_exists("KibanaUrl",$param) and $param["KibanaUrl"] !== null) {
            $this->KibanaUrl = $param["KibanaUrl"];
        }

        if (array_key_exists("KibanaPrivateUrl",$param) and $param["KibanaPrivateUrl"] !== null) {
            $this->KibanaPrivateUrl = $param["KibanaPrivateUrl"];
        }

        if (array_key_exists("IndexAccessUrl",$param) and $param["IndexAccessUrl"] !== null) {
            $this->IndexAccessUrl = $param["IndexAccessUrl"];
        }

        if (array_key_exists("KibanaPublicAcl",$param) and $param["KibanaPublicAcl"] !== null) {
            $this->KibanaPublicAcl = new EsAcl();
            $this->KibanaPublicAcl->deserialize($param["KibanaPublicAcl"]);
        }

        if (array_key_exists("KibanaEmbedUrl",$param) and $param["KibanaEmbedUrl"] !== null) {
            $this->KibanaEmbedUrl = $param["KibanaEmbedUrl"];
        }

        if (array_key_exists("DiDataList",$param) and $param["DiDataList"] !== null) {
            $this->DiDataList = new DiData();
            $this->DiDataList->deserialize($param["DiDataList"]);
        }

        if (array_key_exists("VpcInfo",$param) and $param["VpcInfo"] !== null) {
            $this->VpcInfo = [];
            foreach ($param["VpcInfo"] as $key => $value){
                $obj = new VpcInfo();
                $obj->deserialize($value);
                array_push($this->VpcInfo, $obj);
            }
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("EnableKibanaPublicAccess",$param) and $param["EnableKibanaPublicAccess"] !== null) {
            $this->EnableKibanaPublicAccess = $param["EnableKibanaPublicAccess"];
        }

        if (array_key_exists("EnableKibanaPrivateAccess",$param) and $param["EnableKibanaPrivateAccess"] !== null) {
            $this->EnableKibanaPrivateAccess = $param["EnableKibanaPrivateAccess"];
        }

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("KibanaLanguage",$param) and $param["KibanaLanguage"] !== null) {
            $this->KibanaLanguage = $param["KibanaLanguage"];
        }

        if (array_key_exists("ClusterType",$param) and $param["ClusterType"] !== null) {
            $this->ClusterType = $param["ClusterType"];
        }

        if (array_key_exists("TagList",$param) and $param["TagList"] !== null) {
            $this->TagList = [];
            foreach ($param["TagList"] as $key => $value){
                $obj = new TagInfo();
                $obj->deserialize($value);
                array_push($this->TagList, $obj);
            }
        }

        if (array_key_exists("EnableMcpAccess",$param) and $param["EnableMcpAccess"] !== null) {
            $this->EnableMcpAccess = $param["EnableMcpAccess"];
        }

        if (array_key_exists("McpAccess",$param) and $param["McpAccess"] !== null) {
            $this->McpAccess = $param["McpAccess"];
        }
    }
}
