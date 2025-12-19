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
namespace TencentCloud\Lke\V20231130\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ListChannel请求参数结构体
 *
 * @method string getAppBizId() 获取应用ID（获取方法参看如何获取   [BotBizId](https://cloud.tencent.com/document/product/1759/109469#4eecb8c1-6ce4-45f5-8fa2-b269449d8efa)）
 * @method void setAppBizId(string $AppBizId) 设置应用ID（获取方法参看如何获取   [BotBizId](https://cloud.tencent.com/document/product/1759/109469#4eecb8c1-6ce4-45f5-8fa2-b269449d8efa)）
 * @method string getBotBizId() 获取应用ID
 * @method void setBotBizId(string $BotBizId) 设置应用ID
 * @method integer getPageNumber() 获取页码（必须大于0）
 * @method void setPageNumber(integer $PageNumber) 设置页码（必须大于0）
 * @method integer getPageSize() 获取分页数量（取值范围为1-200）
 * @method void setPageSize(integer $PageSize) 设置分页数量（取值范围为1-200）
 * @method array getChannelType() 获取渠道类型, 10000: 微信订阅号，10001: 微信服务号，10002：企微应用，10004：微信客服，10005：小程序，10009：企微智能机器人 。（默认为[]）
 * @method void setChannelType(array $ChannelType) 设置渠道类型, 10000: 微信订阅号，10001: 微信服务号，10002：企微应用，10004：微信客服，10005：小程序，10009：企微智能机器人 。（默认为[]）
 * @method array getChannelStatus() 获取渠道状态 1未发布 2运行中 3已下线 （默认为[]）
 * @method void setChannelStatus(array $ChannelStatus) 设置渠道状态 1未发布 2运行中 3已下线 （默认为[]）
 */
class ListChannelRequest extends AbstractModel
{
    /**
     * @var string 应用ID（获取方法参看如何获取   [BotBizId](https://cloud.tencent.com/document/product/1759/109469#4eecb8c1-6ce4-45f5-8fa2-b269449d8efa)）
     */
    public $AppBizId;

    /**
     * @var string 应用ID
     * @deprecated
     */
    public $BotBizId;

    /**
     * @var integer 页码（必须大于0）
     */
    public $PageNumber;

    /**
     * @var integer 分页数量（取值范围为1-200）
     */
    public $PageSize;

    /**
     * @var array 渠道类型, 10000: 微信订阅号，10001: 微信服务号，10002：企微应用，10004：微信客服，10005：小程序，10009：企微智能机器人 。（默认为[]）
     */
    public $ChannelType;

    /**
     * @var array 渠道状态 1未发布 2运行中 3已下线 （默认为[]）
     */
    public $ChannelStatus;

    /**
     * @param string $AppBizId 应用ID（获取方法参看如何获取   [BotBizId](https://cloud.tencent.com/document/product/1759/109469#4eecb8c1-6ce4-45f5-8fa2-b269449d8efa)）
     * @param string $BotBizId 应用ID
     * @param integer $PageNumber 页码（必须大于0）
     * @param integer $PageSize 分页数量（取值范围为1-200）
     * @param array $ChannelType 渠道类型, 10000: 微信订阅号，10001: 微信服务号，10002：企微应用，10004：微信客服，10005：小程序，10009：企微智能机器人 。（默认为[]）
     * @param array $ChannelStatus 渠道状态 1未发布 2运行中 3已下线 （默认为[]）
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
        if (array_key_exists("AppBizId",$param) and $param["AppBizId"] !== null) {
            $this->AppBizId = $param["AppBizId"];
        }

        if (array_key_exists("BotBizId",$param) and $param["BotBizId"] !== null) {
            $this->BotBizId = $param["BotBizId"];
        }

        if (array_key_exists("PageNumber",$param) and $param["PageNumber"] !== null) {
            $this->PageNumber = $param["PageNumber"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("ChannelType",$param) and $param["ChannelType"] !== null) {
            $this->ChannelType = $param["ChannelType"];
        }

        if (array_key_exists("ChannelStatus",$param) and $param["ChannelStatus"] !== null) {
            $this->ChannelStatus = $param["ChannelStatus"];
        }
    }
}
