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
namespace TencentCloud\Iss\V20230517\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ListVideoSnapshotResult请求参数结构体
 *
 * @method integer getBeginTime() 获取<p>开始时间</p><p>单位：秒</p>
 * @method void setBeginTime(integer $BeginTime) 设置<p>开始时间</p><p>单位：秒</p>
 * @method integer getEndTime() 获取<p>结束时间</p><p>单位：秒</p>
 * @method void setEndTime(integer $EndTime) 设置<p>结束时间</p><p>单位：秒</p>
 * @method string getConfigId() 获取<p>截图配置Id</p>
 * @method void setConfigId(string $ConfigId) 设置<p>截图配置Id</p>
 * @method string getChannelId() 获取<p>通道Id</p>
 * @method void setChannelId(string $ChannelId) 设置<p>通道Id</p>
 * @method integer getType() 获取<p>截图类型</p><p>枚举值：</p><ul><li>1： 实时截帧</li><li>2： 低频截帧</li></ul>
 * @method void setType(integer $Type) 设置<p>截图类型</p><p>枚举值：</p><ul><li>1： 实时截帧</li><li>2： 低频截帧</li></ul>
 * @method integer getImageUrlExpires() 获取<p>图片URL有效期，单位：秒</p><p>取值范围：[60, 86400]</p><p>默认值：600</p>
 * @method void setImageUrlExpires(integer $ImageUrlExpires) 设置<p>图片URL有效期，单位：秒</p><p>取值范围：[60, 86400]</p><p>默认值：600</p>
 * @method integer getPageNumber() 获取<p>页码</p><p>默认值：1</p>
 * @method void setPageNumber(integer $PageNumber) 设置<p>页码</p><p>默认值：1</p>
 * @method integer getPageSize() 获取<p>每页数目</p><p>取值范围：[1, 200]</p><p>默认值：20</p>
 * @method void setPageSize(integer $PageSize) 设置<p>每页数目</p><p>取值范围：[1, 200]</p><p>默认值：20</p>
 */
class ListVideoSnapshotResultRequest extends AbstractModel
{
    /**
     * @var integer <p>开始时间</p><p>单位：秒</p>
     */
    public $BeginTime;

    /**
     * @var integer <p>结束时间</p><p>单位：秒</p>
     */
    public $EndTime;

    /**
     * @var string <p>截图配置Id</p>
     */
    public $ConfigId;

    /**
     * @var string <p>通道Id</p>
     */
    public $ChannelId;

    /**
     * @var integer <p>截图类型</p><p>枚举值：</p><ul><li>1： 实时截帧</li><li>2： 低频截帧</li></ul>
     */
    public $Type;

    /**
     * @var integer <p>图片URL有效期，单位：秒</p><p>取值范围：[60, 86400]</p><p>默认值：600</p>
     */
    public $ImageUrlExpires;

    /**
     * @var integer <p>页码</p><p>默认值：1</p>
     */
    public $PageNumber;

    /**
     * @var integer <p>每页数目</p><p>取值范围：[1, 200]</p><p>默认值：20</p>
     */
    public $PageSize;

    /**
     * @param integer $BeginTime <p>开始时间</p><p>单位：秒</p>
     * @param integer $EndTime <p>结束时间</p><p>单位：秒</p>
     * @param string $ConfigId <p>截图配置Id</p>
     * @param string $ChannelId <p>通道Id</p>
     * @param integer $Type <p>截图类型</p><p>枚举值：</p><ul><li>1： 实时截帧</li><li>2： 低频截帧</li></ul>
     * @param integer $ImageUrlExpires <p>图片URL有效期，单位：秒</p><p>取值范围：[60, 86400]</p><p>默认值：600</p>
     * @param integer $PageNumber <p>页码</p><p>默认值：1</p>
     * @param integer $PageSize <p>每页数目</p><p>取值范围：[1, 200]</p><p>默认值：20</p>
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
        if (array_key_exists("BeginTime",$param) and $param["BeginTime"] !== null) {
            $this->BeginTime = $param["BeginTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("ConfigId",$param) and $param["ConfigId"] !== null) {
            $this->ConfigId = $param["ConfigId"];
        }

        if (array_key_exists("ChannelId",$param) and $param["ChannelId"] !== null) {
            $this->ChannelId = $param["ChannelId"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("ImageUrlExpires",$param) and $param["ImageUrlExpires"] !== null) {
            $this->ImageUrlExpires = $param["ImageUrlExpires"];
        }

        if (array_key_exists("PageNumber",$param) and $param["PageNumber"] !== null) {
            $this->PageNumber = $param["PageNumber"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }
    }
}
