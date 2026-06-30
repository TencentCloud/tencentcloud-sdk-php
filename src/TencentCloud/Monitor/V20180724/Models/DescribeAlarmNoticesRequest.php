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
namespace TencentCloud\Monitor\V20180724\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeAlarmNotices请求参数结构体
 *
 * @method string getModule() 获取<p>模块名，这里填“monitor”</p>
 * @method void setModule(string $Module) 设置<p>模块名，这里填“monitor”</p>
 * @method integer getPageNumber() 获取<p>页码 最小为1</p>
 * @method void setPageNumber(integer $PageNumber) 设置<p>页码 最小为1</p>
 * @method integer getPageSize() 获取<p>分页大小 1～200</p>
 * @method void setPageSize(integer $PageSize) 设置<p>分页大小 1～200</p>
 * @method string getOrder() 获取<p>按更新时间排序方式 ASC=正序 DESC=倒序</p>
 * @method void setOrder(string $Order) 设置<p>按更新时间排序方式 ASC=正序 DESC=倒序</p>
 * @method integer getOwnerUid() 获取<p>主账号 uid 用于创建预设通知</p>
 * @method void setOwnerUid(integer $OwnerUid) 设置<p>主账号 uid 用于创建预设通知</p>
 * @method string getName() 获取<p>告警通知模板名称 用来模糊搜索</p>
 * @method void setName(string $Name) 设置<p>告警通知模板名称 用来模糊搜索</p>
 * @method string getReceiverType() 获取<p>根据接收人过滤告警通知模板需要选定通知用户类型 USER=用户 GROUP=用户组 传空=不按接收人过滤</p>
 * @method void setReceiverType(string $ReceiverType) 设置<p>根据接收人过滤告警通知模板需要选定通知用户类型 USER=用户 GROUP=用户组 传空=不按接收人过滤</p>
 * @method array getUserIds() 获取<p>接收对象列表</p>
 * @method void setUserIds(array $UserIds) 设置<p>接收对象列表</p>
 * @method array getGroupIds() 获取<p>接收组列表</p>
 * @method void setGroupIds(array $GroupIds) 设置<p>接收组列表</p>
 * @method array getNoticeIds() 获取<p>根据通知模板 id 过滤，空数组/不传则不过滤</p>
 * @method void setNoticeIds(array $NoticeIds) 设置<p>根据通知模板 id 过滤，空数组/不传则不过滤</p>
 * @method array getTags() 获取<p>模板根据标签过滤</p>
 * @method void setTags(array $Tags) 设置<p>模板根据标签过滤</p>
 * @method array getOnCallFormIDs() 获取<p>值班列表</p>
 * @method void setOnCallFormIDs(array $OnCallFormIDs) 设置<p>值班列表</p>
 */
class DescribeAlarmNoticesRequest extends AbstractModel
{
    /**
     * @var string <p>模块名，这里填“monitor”</p>
     */
    public $Module;

    /**
     * @var integer <p>页码 最小为1</p>
     */
    public $PageNumber;

    /**
     * @var integer <p>分页大小 1～200</p>
     */
    public $PageSize;

    /**
     * @var string <p>按更新时间排序方式 ASC=正序 DESC=倒序</p>
     */
    public $Order;

    /**
     * @var integer <p>主账号 uid 用于创建预设通知</p>
     */
    public $OwnerUid;

    /**
     * @var string <p>告警通知模板名称 用来模糊搜索</p>
     */
    public $Name;

    /**
     * @var string <p>根据接收人过滤告警通知模板需要选定通知用户类型 USER=用户 GROUP=用户组 传空=不按接收人过滤</p>
     */
    public $ReceiverType;

    /**
     * @var array <p>接收对象列表</p>
     */
    public $UserIds;

    /**
     * @var array <p>接收组列表</p>
     */
    public $GroupIds;

    /**
     * @var array <p>根据通知模板 id 过滤，空数组/不传则不过滤</p>
     */
    public $NoticeIds;

    /**
     * @var array <p>模板根据标签过滤</p>
     */
    public $Tags;

    /**
     * @var array <p>值班列表</p>
     */
    public $OnCallFormIDs;

    /**
     * @param string $Module <p>模块名，这里填“monitor”</p>
     * @param integer $PageNumber <p>页码 最小为1</p>
     * @param integer $PageSize <p>分页大小 1～200</p>
     * @param string $Order <p>按更新时间排序方式 ASC=正序 DESC=倒序</p>
     * @param integer $OwnerUid <p>主账号 uid 用于创建预设通知</p>
     * @param string $Name <p>告警通知模板名称 用来模糊搜索</p>
     * @param string $ReceiverType <p>根据接收人过滤告警通知模板需要选定通知用户类型 USER=用户 GROUP=用户组 传空=不按接收人过滤</p>
     * @param array $UserIds <p>接收对象列表</p>
     * @param array $GroupIds <p>接收组列表</p>
     * @param array $NoticeIds <p>根据通知模板 id 过滤，空数组/不传则不过滤</p>
     * @param array $Tags <p>模板根据标签过滤</p>
     * @param array $OnCallFormIDs <p>值班列表</p>
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
        if (array_key_exists("Module",$param) and $param["Module"] !== null) {
            $this->Module = $param["Module"];
        }

        if (array_key_exists("PageNumber",$param) and $param["PageNumber"] !== null) {
            $this->PageNumber = $param["PageNumber"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("Order",$param) and $param["Order"] !== null) {
            $this->Order = $param["Order"];
        }

        if (array_key_exists("OwnerUid",$param) and $param["OwnerUid"] !== null) {
            $this->OwnerUid = $param["OwnerUid"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("ReceiverType",$param) and $param["ReceiverType"] !== null) {
            $this->ReceiverType = $param["ReceiverType"];
        }

        if (array_key_exists("UserIds",$param) and $param["UserIds"] !== null) {
            $this->UserIds = $param["UserIds"];
        }

        if (array_key_exists("GroupIds",$param) and $param["GroupIds"] !== null) {
            $this->GroupIds = $param["GroupIds"];
        }

        if (array_key_exists("NoticeIds",$param) and $param["NoticeIds"] !== null) {
            $this->NoticeIds = $param["NoticeIds"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("OnCallFormIDs",$param) and $param["OnCallFormIDs"] !== null) {
            $this->OnCallFormIDs = $param["OnCallFormIDs"];
        }
    }
}
