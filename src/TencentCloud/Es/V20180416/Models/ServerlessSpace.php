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
 * @method string getSpaceId() 获取Serverless索引空间ID
 * @method void setSpaceId(string $SpaceId) 设置Serverless索引空间ID
 * @method string getSpaceName() 获取Serverless索引空间名
 * @method void setSpaceName(string $SpaceName) 设置Serverless索引空间名
 * @method integer getStatus() 获取Serverless索引空间状态，0正常，-1已删除
 * @method void setStatus(integer $Status) 设置Serverless索引空间状态，0正常，-1已删除
 * @method string getCreateTime() 获取创建日期
 * @method void setCreateTime(string $CreateTime) 设置创建日期
 * @method integer getIndexCount() 获取空间内索引数量
 * @method void setIndexCount(integer $IndexCount) 设置空间内索引数量
 * @method string getKibanaUrl() 获取kibana公网uri
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setKibanaUrl(string $KibanaUrl) 设置kibana公网uri
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getKibanaPrivateUrl() 获取kibana内网url
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setKibanaPrivateUrl(string $KibanaPrivateUrl) 设置kibana内网url
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getIndexAccessUrl() 获取空间内网访问地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIndexAccessUrl(string $IndexAccessUrl) 设置空间内网访问地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method EsAcl getKibanaPublicAcl() 获取空间白名单
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setKibanaPublicAcl(EsAcl $KibanaPublicAcl) 设置空间白名单
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getKibanaEmbedUrl() 获取空间检索分析域名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setKibanaEmbedUrl(string $KibanaEmbedUrl) 设置空间检索分析域名
注意：此字段可能返回 null，表示取不到有效值。
 * @method DiData getDiDataList() 获取数据联路
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDiDataList(DiData $DiDataList) 设置数据联路
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getVpcInfo() 获取空间vpc信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVpcInfo(array $VpcInfo) 设置空间vpc信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRegion() 获取地域
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRegion(string $Region) 设置地域
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getZone() 获取可用区
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setZone(string $Zone) 设置可用区
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getEnableKibanaPublicAccess() 获取kibana公网开关，0关闭，1开启
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEnableKibanaPublicAccess(integer $EnableKibanaPublicAccess) 设置kibana公网开关，0关闭，1开启
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getEnableKibanaPrivateAccess() 获取kibana内网开关，0关闭，1开启
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEnableKibanaPrivateAccess(integer $EnableKibanaPrivateAccess) 设置kibana内网开关，0关闭，1开启
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getAppId() 获取空间所属appid
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAppId(integer $AppId) 设置空间所属appid
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getKibanaLanguage() 获取//默认en， 可选zh-CN
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setKibanaLanguage(string $KibanaLanguage) 设置//默认en， 可选zh-CN
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getClusterType() 获取0
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setClusterType(integer $ClusterType) 设置0
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getTagList() 获取空间标签信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTagList(array $TagList) 设置空间标签信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getEnableMcpAccess() 获取是否开启mcp服务
 * @method void setEnableMcpAccess(integer $EnableMcpAccess) 设置是否开启mcp服务
 * @method string getMcpAccess() 获取mcp的访问地址
 * @method void setMcpAccess(string $McpAccess) 设置mcp的访问地址
 */
class ServerlessSpace extends AbstractModel
{
    /**
     * @var string Serverless索引空间ID
     */
    public $SpaceId;

    /**
     * @var string Serverless索引空间名
     */
    public $SpaceName;

    /**
     * @var integer Serverless索引空间状态，0正常，-1已删除
     */
    public $Status;

    /**
     * @var string 创建日期
     */
    public $CreateTime;

    /**
     * @var integer 空间内索引数量
     */
    public $IndexCount;

    /**
     * @var string kibana公网uri
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $KibanaUrl;

    /**
     * @var string kibana内网url
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $KibanaPrivateUrl;

    /**
     * @var string 空间内网访问地址
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IndexAccessUrl;

    /**
     * @var EsAcl 空间白名单
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $KibanaPublicAcl;

    /**
     * @var string 空间检索分析域名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $KibanaEmbedUrl;

    /**
     * @var DiData 数据联路
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DiDataList;

    /**
     * @var array 空间vpc信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VpcInfo;

    /**
     * @var string 地域
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Region;

    /**
     * @var string 可用区
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Zone;

    /**
     * @var integer kibana公网开关，0关闭，1开启
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EnableKibanaPublicAccess;

    /**
     * @var integer kibana内网开关，0关闭，1开启
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EnableKibanaPrivateAccess;

    /**
     * @var integer 空间所属appid
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AppId;

    /**
     * @var string //默认en， 可选zh-CN
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $KibanaLanguage;

    /**
     * @var integer 0
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ClusterType;

    /**
     * @var array 空间标签信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TagList;

    /**
     * @var integer 是否开启mcp服务
     */
    public $EnableMcpAccess;

    /**
     * @var string mcp的访问地址
     */
    public $McpAccess;

    /**
     * @param string $SpaceId Serverless索引空间ID
     * @param string $SpaceName Serverless索引空间名
     * @param integer $Status Serverless索引空间状态，0正常，-1已删除
     * @param string $CreateTime 创建日期
     * @param integer $IndexCount 空间内索引数量
     * @param string $KibanaUrl kibana公网uri
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $KibanaPrivateUrl kibana内网url
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $IndexAccessUrl 空间内网访问地址
注意：此字段可能返回 null，表示取不到有效值。
     * @param EsAcl $KibanaPublicAcl 空间白名单
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $KibanaEmbedUrl 空间检索分析域名
注意：此字段可能返回 null，表示取不到有效值。
     * @param DiData $DiDataList 数据联路
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $VpcInfo 空间vpc信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Region 地域
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Zone 可用区
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $EnableKibanaPublicAccess kibana公网开关，0关闭，1开启
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $EnableKibanaPrivateAccess kibana内网开关，0关闭，1开启
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $AppId 空间所属appid
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $KibanaLanguage //默认en， 可选zh-CN
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ClusterType 0
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $TagList 空间标签信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $EnableMcpAccess 是否开启mcp服务
     * @param string $McpAccess mcp的访问地址
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
