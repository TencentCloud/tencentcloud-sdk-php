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
namespace TencentCloud\Ses\V20201002\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 统计数据的结构体
 *
 * @method string getSendDate() 获取<p>日期</p>
 * @method void setSendDate(string $SendDate) 设置<p>日期</p>
 * @method integer getRequestCount() 获取<p>邮件请求数量</p>
 * @method void setRequestCount(integer $RequestCount) 设置<p>邮件请求数量</p>
 * @method integer getAcceptedCount() 获取<p>腾讯云通过数量</p>
 * @method void setAcceptedCount(integer $AcceptedCount) 设置<p>腾讯云通过数量</p>
 * @method integer getDeliveredCount() 获取<p>送达数量</p>
 * @method void setDeliveredCount(integer $DeliveredCount) 设置<p>送达数量</p>
 * @method integer getOpenedCount() 获取<p>打开邮件总次数</p>
 * @method void setOpenedCount(integer $OpenedCount) 设置<p>打开邮件总次数</p>
 * @method integer getClickedCount() 获取<p>点击了邮件中的链接数量用户数量</p>
 * @method void setClickedCount(integer $ClickedCount) 设置<p>点击了邮件中的链接数量用户数量</p>
 * @method integer getBounceCount() 获取<p>退信数量</p>
 * @method void setBounceCount(integer $BounceCount) 设置<p>退信数量</p>
 * @method integer getUnsubscribeCount() 获取<p>取消订阅的用户数量</p>
 * @method void setUnsubscribeCount(integer $UnsubscribeCount) 设置<p>取消订阅的用户数量</p>
 */
class Volume extends AbstractModel
{
    /**
     * @var string <p>日期</p>
     */
    public $SendDate;

    /**
     * @var integer <p>邮件请求数量</p>
     */
    public $RequestCount;

    /**
     * @var integer <p>腾讯云通过数量</p>
     */
    public $AcceptedCount;

    /**
     * @var integer <p>送达数量</p>
     */
    public $DeliveredCount;

    /**
     * @var integer <p>打开邮件总次数</p>
     */
    public $OpenedCount;

    /**
     * @var integer <p>点击了邮件中的链接数量用户数量</p>
     */
    public $ClickedCount;

    /**
     * @var integer <p>退信数量</p>
     */
    public $BounceCount;

    /**
     * @var integer <p>取消订阅的用户数量</p>
     */
    public $UnsubscribeCount;

    /**
     * @param string $SendDate <p>日期</p>
     * @param integer $RequestCount <p>邮件请求数量</p>
     * @param integer $AcceptedCount <p>腾讯云通过数量</p>
     * @param integer $DeliveredCount <p>送达数量</p>
     * @param integer $OpenedCount <p>打开邮件总次数</p>
     * @param integer $ClickedCount <p>点击了邮件中的链接数量用户数量</p>
     * @param integer $BounceCount <p>退信数量</p>
     * @param integer $UnsubscribeCount <p>取消订阅的用户数量</p>
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
        if (array_key_exists("SendDate",$param) and $param["SendDate"] !== null) {
            $this->SendDate = $param["SendDate"];
        }

        if (array_key_exists("RequestCount",$param) and $param["RequestCount"] !== null) {
            $this->RequestCount = $param["RequestCount"];
        }

        if (array_key_exists("AcceptedCount",$param) and $param["AcceptedCount"] !== null) {
            $this->AcceptedCount = $param["AcceptedCount"];
        }

        if (array_key_exists("DeliveredCount",$param) and $param["DeliveredCount"] !== null) {
            $this->DeliveredCount = $param["DeliveredCount"];
        }

        if (array_key_exists("OpenedCount",$param) and $param["OpenedCount"] !== null) {
            $this->OpenedCount = $param["OpenedCount"];
        }

        if (array_key_exists("ClickedCount",$param) and $param["ClickedCount"] !== null) {
            $this->ClickedCount = $param["ClickedCount"];
        }

        if (array_key_exists("BounceCount",$param) and $param["BounceCount"] !== null) {
            $this->BounceCount = $param["BounceCount"];
        }

        if (array_key_exists("UnsubscribeCount",$param) and $param["UnsubscribeCount"] !== null) {
            $this->UnsubscribeCount = $param["UnsubscribeCount"];
        }
    }
}
