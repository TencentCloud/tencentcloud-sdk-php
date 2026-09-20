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
namespace TencentCloud\Iotexplorer\V20190423\Models;
use TencentCloud\Common\AbstractModel;

/**
 * GetVodCloudStorageVideoList请求参数结构体
 *
 * @method string getProductId() 获取<p>产品id</p>
 * @method void setProductId(string $ProductId) 设置<p>产品id</p>
 * @method string getDeviceName() 获取<p>设备名称</p>
 * @method void setDeviceName(string $DeviceName) 设置<p>设备名称</p>
 * @method string getDate() 获取<p>日期</p><p>参数格式：格式 yyyy-MM-dd</p>
 * @method void setDate(string $Date) 设置<p>日期</p><p>参数格式：格式 yyyy-MM-dd</p>
 * @method integer getChannelId() 获取<p>通道id</p>
 * @method void setChannelId(integer $ChannelId) 设置<p>通道id</p>
 * @method integer getStartTime() 获取<p>开始时间；与 EndTime 必须同时填或同时省略</p><p>单位：秒</p>
 * @method void setStartTime(integer $StartTime) 设置<p>开始时间；与 EndTime 必须同时填或同时省略</p><p>单位：秒</p>
 * @method integer getEndTime() 获取<p>结束时间</p><p>单位：秒</p>
 * @method void setEndTime(integer $EndTime) 设置<p>结束时间</p><p>单位：秒</p>
 * @method string getUserId() 获取<p>用户id</p>
 * @method void setUserId(string $UserId) 设置<p>用户id</p>
 * @method string getTimeZone() 获取<p>时区</p>
 * @method void setTimeZone(string $TimeZone) 设置<p>时区</p>
 * @method integer getExpireSec() 获取<p>非加密文件的防盗链 URL 有效期</p><p>单位：秒</p>
 * @method void setExpireSec(integer $ExpireSec) 设置<p>非加密文件的防盗链 URL 有效期</p><p>单位：秒</p>
 * @method integer getPlatform() 获取<p>0 Android，1 小程序，2 iOS，3 鸿蒙</p>
 * @method void setPlatform(integer $Platform) 设置<p>0 Android，1 小程序，2 iOS，3 鸿蒙</p>
 * @method string getContext() 获取<p>分页游标；首页传空，之后原样回填上一页响应的 Context</p>
 * @method void setContext(string $Context) 设置<p>分页游标；首页传空，之后原样回填上一页响应的 Context</p>
 * @method integer getSize() 获取<p>每页视频条数；&lt;=0 或不填默认 10，&gt;100 按 100 计</p>
 * @method void setSize(integer $Size) 设置<p>每页视频条数；&lt;=0 或不填默认 10，&gt;100 按 100 计</p>
 */
class GetVodCloudStorageVideoListRequest extends AbstractModel
{
    /**
     * @var string <p>产品id</p>
     */
    public $ProductId;

    /**
     * @var string <p>设备名称</p>
     */
    public $DeviceName;

    /**
     * @var string <p>日期</p><p>参数格式：格式 yyyy-MM-dd</p>
     */
    public $Date;

    /**
     * @var integer <p>通道id</p>
     */
    public $ChannelId;

    /**
     * @var integer <p>开始时间；与 EndTime 必须同时填或同时省略</p><p>单位：秒</p>
     */
    public $StartTime;

    /**
     * @var integer <p>结束时间</p><p>单位：秒</p>
     */
    public $EndTime;

    /**
     * @var string <p>用户id</p>
     */
    public $UserId;

    /**
     * @var string <p>时区</p>
     */
    public $TimeZone;

    /**
     * @var integer <p>非加密文件的防盗链 URL 有效期</p><p>单位：秒</p>
     */
    public $ExpireSec;

    /**
     * @var integer <p>0 Android，1 小程序，2 iOS，3 鸿蒙</p>
     */
    public $Platform;

    /**
     * @var string <p>分页游标；首页传空，之后原样回填上一页响应的 Context</p>
     */
    public $Context;

    /**
     * @var integer <p>每页视频条数；&lt;=0 或不填默认 10，&gt;100 按 100 计</p>
     */
    public $Size;

    /**
     * @param string $ProductId <p>产品id</p>
     * @param string $DeviceName <p>设备名称</p>
     * @param string $Date <p>日期</p><p>参数格式：格式 yyyy-MM-dd</p>
     * @param integer $ChannelId <p>通道id</p>
     * @param integer $StartTime <p>开始时间；与 EndTime 必须同时填或同时省略</p><p>单位：秒</p>
     * @param integer $EndTime <p>结束时间</p><p>单位：秒</p>
     * @param string $UserId <p>用户id</p>
     * @param string $TimeZone <p>时区</p>
     * @param integer $ExpireSec <p>非加密文件的防盗链 URL 有效期</p><p>单位：秒</p>
     * @param integer $Platform <p>0 Android，1 小程序，2 iOS，3 鸿蒙</p>
     * @param string $Context <p>分页游标；首页传空，之后原样回填上一页响应的 Context</p>
     * @param integer $Size <p>每页视频条数；&lt;=0 或不填默认 10，&gt;100 按 100 计</p>
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
        if (array_key_exists("ProductId",$param) and $param["ProductId"] !== null) {
            $this->ProductId = $param["ProductId"];
        }

        if (array_key_exists("DeviceName",$param) and $param["DeviceName"] !== null) {
            $this->DeviceName = $param["DeviceName"];
        }

        if (array_key_exists("Date",$param) and $param["Date"] !== null) {
            $this->Date = $param["Date"];
        }

        if (array_key_exists("ChannelId",$param) and $param["ChannelId"] !== null) {
            $this->ChannelId = $param["ChannelId"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("UserId",$param) and $param["UserId"] !== null) {
            $this->UserId = $param["UserId"];
        }

        if (array_key_exists("TimeZone",$param) and $param["TimeZone"] !== null) {
            $this->TimeZone = $param["TimeZone"];
        }

        if (array_key_exists("ExpireSec",$param) and $param["ExpireSec"] !== null) {
            $this->ExpireSec = $param["ExpireSec"];
        }

        if (array_key_exists("Platform",$param) and $param["Platform"] !== null) {
            $this->Platform = $param["Platform"];
        }

        if (array_key_exists("Context",$param) and $param["Context"] !== null) {
            $this->Context = $param["Context"];
        }

        if (array_key_exists("Size",$param) and $param["Size"] !== null) {
            $this->Size = $param["Size"];
        }
    }
}
