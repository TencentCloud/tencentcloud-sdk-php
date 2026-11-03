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
 * 异常登录白名单规则项（自定义与自学习共用，以 Type 区分）
 *
 * @method string getType() 获取<p>白名单类型：Custom-自定义白名单 Learn-自学习白名单</p>
 * @method void setType(string $Type) 设置<p>白名单类型：Custom-自定义白名单 Learn-自学习白名单</p>
 * @method integer getAppId() 获取<p>规则所属账号 AppId，多账号场景下用于区分与后续编辑定位</p>
 * @method void setAppId(integer $AppId) 设置<p>规则所属账号 AppId，多账号场景下用于区分与后续编辑定位</p>
 * @method integer getId() 获取<p>规则ID；自学习为规则组ID（组内最小行ID）</p>
 * @method void setId(integer $Id) 设置<p>规则ID；自学习为规则组ID（组内最小行ID）</p>
 * @method string getSrcIp() 获取<p>登录源IP（逗号分隔）；自学习白名单恒为空</p>
 * @method void setSrcIp(string $SrcIp) 设置<p>登录源IP（逗号分隔）；自学习白名单恒为空</p>
 * @method string getUserName() 获取<p>登录用户名（逗号分隔）；自学习白名单恒为空</p>
 * @method void setUserName(string $UserName) 设置<p>登录用户名（逗号分隔）；自学习白名单恒为空</p>
 * @method string getStartTime() 获取<p>登录时段起始 HH:MM；自学习白名单恒为空</p>
 * @method void setStartTime(string $StartTime) 设置<p>登录时段起始 HH:MM；自学习白名单恒为空</p>
 * @method string getEndTime() 获取<p>登录时段结束 HH:MM；自学习白名单恒为空</p>
 * @method void setEndTime(string $EndTime) 设置<p>登录时段结束 HH:MM；自学习白名单恒为空</p>
 * @method array getPlaces() 获取<p>常用登录地列表</p>
 * @method void setPlaces(array $Places) 设置<p>常用登录地列表</p>
 * @method string getLocations() 获取<p>常用登录地展示文案（逗号分隔），供列表直接展示</p>
 * @method void setLocations(string $Locations) 设置<p>常用登录地展示文案（逗号分隔），供列表直接展示</p>
 * @method integer getScope() 获取<p>生效资产范围：0-指定主机（主机或标签命中） 1-全部主机</p>
 * @method void setScope(integer $Scope) 设置<p>生效资产范围：0-指定主机（主机或标签命中） 1-全部主机</p>
 * @method array getQUUIDS() 获取<p>生效主机 QUUID 列表（与 InstanceIDs 一一对应）</p>
 * @method void setQUUIDS(array $QUUIDS) 设置<p>生效主机 QUUID 列表（与 InstanceIDs 一一对应）</p>
 * @method array getInstanceIDs() 获取<p>生效主机实例ID列表（与 QUUIDS 一一对应）</p>
 * @method void setInstanceIDs(array $InstanceIDs) 设置<p>生效主机实例ID列表（与 QUUIDS 一一对应）</p>
 * @method array getExcludeQUUIDS() 获取<p>剔除主机 QUUID 列表</p>
 * @method void setExcludeQUUIDS(array $ExcludeQUUIDS) 设置<p>剔除主机 QUUID 列表</p>
 * @method array getExcludeInstanceIDs() 获取<p>剔除主机实例ID列表</p>
 * @method void setExcludeInstanceIDs(array $ExcludeInstanceIDs) 设置<p>剔除主机实例ID列表</p>
 * @method array getTagItems() 获取<p>生效标签详情列表</p>
 * @method void setTagItems(array $TagItems) 设置<p>生效标签详情列表</p>
 * @method integer getHostCount() 获取<p>主机数：自定义为指定主机数（Scope=1 时为 0，前端展示全部主机）；自学习为组内去重主机数</p>
 * @method void setHostCount(integer $HostCount) 设置<p>主机数：自定义为指定主机数（Scope=1 时为 0，前端展示全部主机）；自学习为组内去重主机数</p>
 * @method string getRemark() 获取<p>备注</p>
 * @method void setRemark(string $Remark) 设置<p>备注</p>
 * @method string getCreateTime() 获取<p>创建时间，格式 2006-01-02 15:04:05</p>
 * @method void setCreateTime(string $CreateTime) 设置<p>创建时间，格式 2006-01-02 15:04:05</p>
 * @method string getModifyTime() 获取<p>最近修改时间，格式 2006-01-02 15:04:05</p>
 * @method void setModifyTime(string $ModifyTime) 设置<p>最近修改时间，格式 2006-01-02 15:04:05</p>
 */
class LoginWhiteItem extends AbstractModel
{
    /**
     * @var string <p>白名单类型：Custom-自定义白名单 Learn-自学习白名单</p>
     */
    public $Type;

    /**
     * @var integer <p>规则所属账号 AppId，多账号场景下用于区分与后续编辑定位</p>
     */
    public $AppId;

    /**
     * @var integer <p>规则ID；自学习为规则组ID（组内最小行ID）</p>
     */
    public $Id;

    /**
     * @var string <p>登录源IP（逗号分隔）；自学习白名单恒为空</p>
     */
    public $SrcIp;

    /**
     * @var string <p>登录用户名（逗号分隔）；自学习白名单恒为空</p>
     */
    public $UserName;

    /**
     * @var string <p>登录时段起始 HH:MM；自学习白名单恒为空</p>
     */
    public $StartTime;

    /**
     * @var string <p>登录时段结束 HH:MM；自学习白名单恒为空</p>
     */
    public $EndTime;

    /**
     * @var array <p>常用登录地列表</p>
     */
    public $Places;

    /**
     * @var string <p>常用登录地展示文案（逗号分隔），供列表直接展示</p>
     */
    public $Locations;

    /**
     * @var integer <p>生效资产范围：0-指定主机（主机或标签命中） 1-全部主机</p>
     */
    public $Scope;

    /**
     * @var array <p>生效主机 QUUID 列表（与 InstanceIDs 一一对应）</p>
     */
    public $QUUIDS;

    /**
     * @var array <p>生效主机实例ID列表（与 QUUIDS 一一对应）</p>
     */
    public $InstanceIDs;

    /**
     * @var array <p>剔除主机 QUUID 列表</p>
     */
    public $ExcludeQUUIDS;

    /**
     * @var array <p>剔除主机实例ID列表</p>
     */
    public $ExcludeInstanceIDs;

    /**
     * @var array <p>生效标签详情列表</p>
     */
    public $TagItems;

    /**
     * @var integer <p>主机数：自定义为指定主机数（Scope=1 时为 0，前端展示全部主机）；自学习为组内去重主机数</p>
     */
    public $HostCount;

    /**
     * @var string <p>备注</p>
     */
    public $Remark;

    /**
     * @var string <p>创建时间，格式 2006-01-02 15:04:05</p>
     */
    public $CreateTime;

    /**
     * @var string <p>最近修改时间，格式 2006-01-02 15:04:05</p>
     */
    public $ModifyTime;

    /**
     * @param string $Type <p>白名单类型：Custom-自定义白名单 Learn-自学习白名单</p>
     * @param integer $AppId <p>规则所属账号 AppId，多账号场景下用于区分与后续编辑定位</p>
     * @param integer $Id <p>规则ID；自学习为规则组ID（组内最小行ID）</p>
     * @param string $SrcIp <p>登录源IP（逗号分隔）；自学习白名单恒为空</p>
     * @param string $UserName <p>登录用户名（逗号分隔）；自学习白名单恒为空</p>
     * @param string $StartTime <p>登录时段起始 HH:MM；自学习白名单恒为空</p>
     * @param string $EndTime <p>登录时段结束 HH:MM；自学习白名单恒为空</p>
     * @param array $Places <p>常用登录地列表</p>
     * @param string $Locations <p>常用登录地展示文案（逗号分隔），供列表直接展示</p>
     * @param integer $Scope <p>生效资产范围：0-指定主机（主机或标签命中） 1-全部主机</p>
     * @param array $QUUIDS <p>生效主机 QUUID 列表（与 InstanceIDs 一一对应）</p>
     * @param array $InstanceIDs <p>生效主机实例ID列表（与 QUUIDS 一一对应）</p>
     * @param array $ExcludeQUUIDS <p>剔除主机 QUUID 列表</p>
     * @param array $ExcludeInstanceIDs <p>剔除主机实例ID列表</p>
     * @param array $TagItems <p>生效标签详情列表</p>
     * @param integer $HostCount <p>主机数：自定义为指定主机数（Scope=1 时为 0，前端展示全部主机）；自学习为组内去重主机数</p>
     * @param string $Remark <p>备注</p>
     * @param string $CreateTime <p>创建时间，格式 2006-01-02 15:04:05</p>
     * @param string $ModifyTime <p>最近修改时间，格式 2006-01-02 15:04:05</p>
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("SrcIp",$param) and $param["SrcIp"] !== null) {
            $this->SrcIp = $param["SrcIp"];
        }

        if (array_key_exists("UserName",$param) and $param["UserName"] !== null) {
            $this->UserName = $param["UserName"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("Places",$param) and $param["Places"] !== null) {
            $this->Places = [];
            foreach ($param["Places"] as $key => $value){
                $obj = new LoginWhitePlace();
                $obj->deserialize($value);
                array_push($this->Places, $obj);
            }
        }

        if (array_key_exists("Locations",$param) and $param["Locations"] !== null) {
            $this->Locations = $param["Locations"];
        }

        if (array_key_exists("Scope",$param) and $param["Scope"] !== null) {
            $this->Scope = $param["Scope"];
        }

        if (array_key_exists("QUUIDS",$param) and $param["QUUIDS"] !== null) {
            $this->QUUIDS = $param["QUUIDS"];
        }

        if (array_key_exists("InstanceIDs",$param) and $param["InstanceIDs"] !== null) {
            $this->InstanceIDs = $param["InstanceIDs"];
        }

        if (array_key_exists("ExcludeQUUIDS",$param) and $param["ExcludeQUUIDS"] !== null) {
            $this->ExcludeQUUIDS = $param["ExcludeQUUIDS"];
        }

        if (array_key_exists("ExcludeInstanceIDs",$param) and $param["ExcludeInstanceIDs"] !== null) {
            $this->ExcludeInstanceIDs = $param["ExcludeInstanceIDs"];
        }

        if (array_key_exists("TagItems",$param) and $param["TagItems"] !== null) {
            $this->TagItems = [];
            foreach ($param["TagItems"] as $key => $value){
                $obj = new EDRRuleTagItem();
                $obj->deserialize($value);
                array_push($this->TagItems, $obj);
            }
        }

        if (array_key_exists("HostCount",$param) and $param["HostCount"] !== null) {
            $this->HostCount = $param["HostCount"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("ModifyTime",$param) and $param["ModifyTime"] !== null) {
            $this->ModifyTime = $param["ModifyTime"];
        }
    }
}
