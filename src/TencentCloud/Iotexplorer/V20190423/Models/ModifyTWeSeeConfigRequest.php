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
namespace TencentCloud\Iotexplorer\V20190423\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyTWeSeeConfig请求参数结构体
 *
 * @method string getProductId() 获取产品ID
 * @method void setProductId(string $ProductId) 设置产品ID
 * @method string getDeviceName() 获取设备名称
 * @method void setDeviceName(string $DeviceName) 设置设备名称
 * @method string getUserId() 获取用户ID
 * @method void setUserId(string $UserId) 设置用户ID
 * @method integer getChannelId() 获取通道ID
 * @method void setChannelId(integer $ChannelId) 设置通道ID
 * @method boolean getEnableSummary() 获取是否开启视频摘要，不传则不修改
 * @method void setEnableSummary(boolean $EnableSummary) 设置是否开启视频摘要，不传则不修改
 * @method boolean getEnableSearch() 获取是否开启视频搜索，不传则不修改
 * @method void setEnableSearch(boolean $EnableSearch) 设置是否开启视频搜索，不传则不修改
 * @method string getConfig() 获取配置参数，不传则不修改
 * @method void setConfig(string $Config) 设置配置参数，不传则不修改
 */
class ModifyTWeSeeConfigRequest extends AbstractModel
{
    /**
     * @var string 产品ID
     */
    public $ProductId;

    /**
     * @var string 设备名称
     */
    public $DeviceName;

    /**
     * @var string 用户ID
     */
    public $UserId;

    /**
     * @var integer 通道ID
     */
    public $ChannelId;

    /**
     * @var boolean 是否开启视频摘要，不传则不修改
     */
    public $EnableSummary;

    /**
     * @var boolean 是否开启视频搜索，不传则不修改
     */
    public $EnableSearch;

    /**
     * @var string 配置参数，不传则不修改
     */
    public $Config;

    /**
     * @param string $ProductId 产品ID
     * @param string $DeviceName 设备名称
     * @param string $UserId 用户ID
     * @param integer $ChannelId 通道ID
     * @param boolean $EnableSummary 是否开启视频摘要，不传则不修改
     * @param boolean $EnableSearch 是否开启视频搜索，不传则不修改
     * @param string $Config 配置参数，不传则不修改
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

        if (array_key_exists("UserId",$param) and $param["UserId"] !== null) {
            $this->UserId = $param["UserId"];
        }

        if (array_key_exists("ChannelId",$param) and $param["ChannelId"] !== null) {
            $this->ChannelId = $param["ChannelId"];
        }

        if (array_key_exists("EnableSummary",$param) and $param["EnableSummary"] !== null) {
            $this->EnableSummary = $param["EnableSummary"];
        }

        if (array_key_exists("EnableSearch",$param) and $param["EnableSearch"] !== null) {
            $this->EnableSearch = $param["EnableSearch"];
        }

        if (array_key_exists("Config",$param) and $param["Config"] !== null) {
            $this->Config = $param["Config"];
        }
    }
}
