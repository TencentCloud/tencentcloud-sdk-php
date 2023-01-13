<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
namespace TencentCloud\Antiddos\V20200309\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeListBGPInstances请求参数结构体
 *
 * @method integer getOffset() 获取页起始偏移，取值为(页码-1)*一页条数
 * @method void setOffset(integer $Offset) 设置页起始偏移，取值为(页码-1)*一页条数
 * @method integer getLimit() 获取一页条数，当Limit=0时，默认一页条数为20;最大取值为100
 * @method void setLimit(integer $Limit) 设置一页条数，当Limit=0时，默认一页条数为20;最大取值为100
 * @method string getFilterIp() 获取IP搜索
 * @method void setFilterIp(string $FilterIp) 设置IP搜索
 * @method string getFilterInstanceId() 获取资产实例ID搜索，例如，bgp-00000001
 * @method void setFilterInstanceId(string $FilterInstanceId) 设置资产实例ID搜索，例如，bgp-00000001
 * @method string getFilterRegion() 获取地域搜索，例如，ap-guangzhou
 * @method void setFilterRegion(string $FilterRegion) 设置地域搜索，例如，ap-guangzhou
 * @method string getFilterName() 获取名称搜索
 * @method void setFilterName(string $FilterName) 设置名称搜索
 * @method integer getFilterLine() 获取按照线路搜索, 1: BGP; 2: 三网
 * @method void setFilterLine(integer $FilterLine) 设置按照线路搜索, 1: BGP; 2: 三网
 * @method string getFilterStatus() 获取状态搜索，idle：运行中；attacking：攻击中；blocking：封堵中
 * @method void setFilterStatus(string $FilterStatus) 设置状态搜索，idle：运行中；attacking：攻击中；blocking：封堵中
 * @method string getFilterBoundStatus() 获取高防包绑定状态搜索，bounding：绑定中； failed：绑定失败
 * @method void setFilterBoundStatus(string $FilterBoundStatus) 设置高防包绑定状态搜索，bounding：绑定中； failed：绑定失败
 * @method array getFilterInstanceIdList() 获取实例id数组
 * @method void setFilterInstanceIdList(array $FilterInstanceIdList) 设置实例id数组
 * @method integer getFilterEnterpriseFlag() 获取企业版搜索,  1：包含重保护航套餐下的企业版列表, 2: 不包含重保护航套餐的企业版列表
 * @method void setFilterEnterpriseFlag(integer $FilterEnterpriseFlag) 设置企业版搜索,  1：包含重保护航套餐下的企业版列表, 2: 不包含重保护航套餐的企业版列表
 * @method integer getFilterLightFlag() 获取轻量版搜索
 * @method void setFilterLightFlag(integer $FilterLightFlag) 设置轻量版搜索
 * @method integer getFilterChannelFlag() 获取定制版搜索
 * @method void setFilterChannelFlag(integer $FilterChannelFlag) 设置定制版搜索
 * @method TagFilter getFilterTag() 获取标签搜索
 * @method void setFilterTag(TagFilter $FilterTag) 设置标签搜索
 * @method integer getFilterTrialFlag() 获取试用资源搜索，1: 应急防护资源；2：PLG试用资源
 * @method void setFilterTrialFlag(integer $FilterTrialFlag) 设置试用资源搜索，1: 应急防护资源；2：PLG试用资源
 * @method integer getFilterConvoy() 获取重保护航搜索
 * @method void setFilterConvoy(integer $FilterConvoy) 设置重保护航搜索
 * @method boolean getExcludeAdvancedInfo() 获取默认false；接口传true，返回数据中不包含高级信息，高级信息包含：InstanceList[0].Usage。
 * @method void setExcludeAdvancedInfo(boolean $ExcludeAdvancedInfo) 设置默认false；接口传true，返回数据中不包含高级信息，高级信息包含：InstanceList[0].Usage。
 */
class DescribeListBGPInstancesRequest extends AbstractModel
{
    /**
     * @var integer 页起始偏移，取值为(页码-1)*一页条数
     */
    public $Offset;

    /**
     * @var integer 一页条数，当Limit=0时，默认一页条数为20;最大取值为100
     */
    public $Limit;

    /**
     * @var string IP搜索
     */
    public $FilterIp;

    /**
     * @var string 资产实例ID搜索，例如，bgp-00000001
     */
    public $FilterInstanceId;

    /**
     * @var string 地域搜索，例如，ap-guangzhou
     */
    public $FilterRegion;

    /**
     * @var string 名称搜索
     */
    public $FilterName;

    /**
     * @var integer 按照线路搜索, 1: BGP; 2: 三网
     */
    public $FilterLine;

    /**
     * @var string 状态搜索，idle：运行中；attacking：攻击中；blocking：封堵中
     */
    public $FilterStatus;

    /**
     * @var string 高防包绑定状态搜索，bounding：绑定中； failed：绑定失败
     */
    public $FilterBoundStatus;

    /**
     * @var array 实例id数组
     */
    public $FilterInstanceIdList;

    /**
     * @var integer 企业版搜索,  1：包含重保护航套餐下的企业版列表, 2: 不包含重保护航套餐的企业版列表
     */
    public $FilterEnterpriseFlag;

    /**
     * @var integer 轻量版搜索
     */
    public $FilterLightFlag;

    /**
     * @var integer 定制版搜索
     */
    public $FilterChannelFlag;

    /**
     * @var TagFilter 标签搜索
     */
    public $FilterTag;

    /**
     * @var integer 试用资源搜索，1: 应急防护资源；2：PLG试用资源
     */
    public $FilterTrialFlag;

    /**
     * @var integer 重保护航搜索
     */
    public $FilterConvoy;

    /**
     * @var boolean 默认false；接口传true，返回数据中不包含高级信息，高级信息包含：InstanceList[0].Usage。
     */
    public $ExcludeAdvancedInfo;

    /**
     * @param integer $Offset 页起始偏移，取值为(页码-1)*一页条数
     * @param integer $Limit 一页条数，当Limit=0时，默认一页条数为20;最大取值为100
     * @param string $FilterIp IP搜索
     * @param string $FilterInstanceId 资产实例ID搜索，例如，bgp-00000001
     * @param string $FilterRegion 地域搜索，例如，ap-guangzhou
     * @param string $FilterName 名称搜索
     * @param integer $FilterLine 按照线路搜索, 1: BGP; 2: 三网
     * @param string $FilterStatus 状态搜索，idle：运行中；attacking：攻击中；blocking：封堵中
     * @param string $FilterBoundStatus 高防包绑定状态搜索，bounding：绑定中； failed：绑定失败
     * @param array $FilterInstanceIdList 实例id数组
     * @param integer $FilterEnterpriseFlag 企业版搜索,  1：包含重保护航套餐下的企业版列表, 2: 不包含重保护航套餐的企业版列表
     * @param integer $FilterLightFlag 轻量版搜索
     * @param integer $FilterChannelFlag 定制版搜索
     * @param TagFilter $FilterTag 标签搜索
     * @param integer $FilterTrialFlag 试用资源搜索，1: 应急防护资源；2：PLG试用资源
     * @param integer $FilterConvoy 重保护航搜索
     * @param boolean $ExcludeAdvancedInfo 默认false；接口传true，返回数据中不包含高级信息，高级信息包含：InstanceList[0].Usage。
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
        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("FilterIp",$param) and $param["FilterIp"] !== null) {
            $this->FilterIp = $param["FilterIp"];
        }

        if (array_key_exists("FilterInstanceId",$param) and $param["FilterInstanceId"] !== null) {
            $this->FilterInstanceId = $param["FilterInstanceId"];
        }

        if (array_key_exists("FilterRegion",$param) and $param["FilterRegion"] !== null) {
            $this->FilterRegion = $param["FilterRegion"];
        }

        if (array_key_exists("FilterName",$param) and $param["FilterName"] !== null) {
            $this->FilterName = $param["FilterName"];
        }

        if (array_key_exists("FilterLine",$param) and $param["FilterLine"] !== null) {
            $this->FilterLine = $param["FilterLine"];
        }

        if (array_key_exists("FilterStatus",$param) and $param["FilterStatus"] !== null) {
            $this->FilterStatus = $param["FilterStatus"];
        }

        if (array_key_exists("FilterBoundStatus",$param) and $param["FilterBoundStatus"] !== null) {
            $this->FilterBoundStatus = $param["FilterBoundStatus"];
        }

        if (array_key_exists("FilterInstanceIdList",$param) and $param["FilterInstanceIdList"] !== null) {
            $this->FilterInstanceIdList = $param["FilterInstanceIdList"];
        }

        if (array_key_exists("FilterEnterpriseFlag",$param) and $param["FilterEnterpriseFlag"] !== null) {
            $this->FilterEnterpriseFlag = $param["FilterEnterpriseFlag"];
        }

        if (array_key_exists("FilterLightFlag",$param) and $param["FilterLightFlag"] !== null) {
            $this->FilterLightFlag = $param["FilterLightFlag"];
        }

        if (array_key_exists("FilterChannelFlag",$param) and $param["FilterChannelFlag"] !== null) {
            $this->FilterChannelFlag = $param["FilterChannelFlag"];
        }

        if (array_key_exists("FilterTag",$param) and $param["FilterTag"] !== null) {
            $this->FilterTag = new TagFilter();
            $this->FilterTag->deserialize($param["FilterTag"]);
        }

        if (array_key_exists("FilterTrialFlag",$param) and $param["FilterTrialFlag"] !== null) {
            $this->FilterTrialFlag = $param["FilterTrialFlag"];
        }

        if (array_key_exists("FilterConvoy",$param) and $param["FilterConvoy"] !== null) {
            $this->FilterConvoy = $param["FilterConvoy"];
        }

        if (array_key_exists("ExcludeAdvancedInfo",$param) and $param["ExcludeAdvancedInfo"] !== null) {
            $this->ExcludeAdvancedInfo = $param["ExcludeAdvancedInfo"];
        }
    }
}
