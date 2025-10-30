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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 告警通知接收者信息
 *
 * @method string getReceiverType() 获取接受者类型。可选值：
-  Uin - 用户ID
- Group - 用户组ID
暂不支持其余接收者类型。
 * @method void setReceiverType(string $ReceiverType) 设置接受者类型。可选值：
-  Uin - 用户ID
- Group - 用户组ID
暂不支持其余接收者类型。
 * @method array getReceiverIds() 获取接收者。
当ReceiverType为Uin时，ReceiverIds的值为用户uid。[子用户信息查询](https://cloud.tencent.com/document/api/598/53486)
当ReceiverType为Group时，ReceiverIds的值为用户组id。[CAM用户组](https://cloud.tencent.com/document/product/598/34589)
 * @method void setReceiverIds(array $ReceiverIds) 设置接收者。
当ReceiverType为Uin时，ReceiverIds的值为用户uid。[子用户信息查询](https://cloud.tencent.com/document/api/598/53486)
当ReceiverType为Group时，ReceiverIds的值为用户组id。[CAM用户组](https://cloud.tencent.com/document/product/598/34589)
 * @method array getReceiverChannels() 获取通知接收渠道。
- Email - 邮件
- Sms - 短信
- WeChat - 微信
- Phone - 电话
 * @method void setReceiverChannels(array $ReceiverChannels) 设置通知接收渠道。
- Email - 邮件
- Sms - 短信
- WeChat - 微信
- Phone - 电话
 * @method string getNoticeContentId() 获取通知内容模板ID，使用Default-zh引用默认模板（中文），使用Default-en引用DefaultTemplate(English)。-通过[获取通知内容模板](https://cloud.tencent.com/document/product/614/111714)获取通知内容模板ID
 * @method void setNoticeContentId(string $NoticeContentId) 设置通知内容模板ID，使用Default-zh引用默认模板（中文），使用Default-en引用DefaultTemplate(English)。-通过[获取通知内容模板](https://cloud.tencent.com/document/product/614/111714)获取通知内容模板ID
 * @method string getStartTime() 获取允许接收信息的开始时间。格式：`15:04:05`。必填
 * @method void setStartTime(string $StartTime) 设置允许接收信息的开始时间。格式：`15:04:05`。必填
 * @method string getEndTime() 获取允许接收信息的结束时间。格式：`15:04:05`。必填
 * @method void setEndTime(string $EndTime) 设置允许接收信息的结束时间。格式：`15:04:05`。必填
 * @method integer getIndex() 获取位序。

- 入参时无效。
- 出参时有效。
 * @method void setIndex(integer $Index) 设置位序。

- 入参时无效。
- 出参时有效。
 */
class NoticeReceiver extends AbstractModel
{
    /**
     * @var string 接受者类型。可选值：
-  Uin - 用户ID
- Group - 用户组ID
暂不支持其余接收者类型。
     */
    public $ReceiverType;

    /**
     * @var array 接收者。
当ReceiverType为Uin时，ReceiverIds的值为用户uid。[子用户信息查询](https://cloud.tencent.com/document/api/598/53486)
当ReceiverType为Group时，ReceiverIds的值为用户组id。[CAM用户组](https://cloud.tencent.com/document/product/598/34589)
     */
    public $ReceiverIds;

    /**
     * @var array 通知接收渠道。
- Email - 邮件
- Sms - 短信
- WeChat - 微信
- Phone - 电话
     */
    public $ReceiverChannels;

    /**
     * @var string 通知内容模板ID，使用Default-zh引用默认模板（中文），使用Default-en引用DefaultTemplate(English)。-通过[获取通知内容模板](https://cloud.tencent.com/document/product/614/111714)获取通知内容模板ID
     */
    public $NoticeContentId;

    /**
     * @var string 允许接收信息的开始时间。格式：`15:04:05`。必填
     */
    public $StartTime;

    /**
     * @var string 允许接收信息的结束时间。格式：`15:04:05`。必填
     */
    public $EndTime;

    /**
     * @var integer 位序。

- 入参时无效。
- 出参时有效。
     */
    public $Index;

    /**
     * @param string $ReceiverType 接受者类型。可选值：
-  Uin - 用户ID
- Group - 用户组ID
暂不支持其余接收者类型。
     * @param array $ReceiverIds 接收者。
当ReceiverType为Uin时，ReceiverIds的值为用户uid。[子用户信息查询](https://cloud.tencent.com/document/api/598/53486)
当ReceiverType为Group时，ReceiverIds的值为用户组id。[CAM用户组](https://cloud.tencent.com/document/product/598/34589)
     * @param array $ReceiverChannels 通知接收渠道。
- Email - 邮件
- Sms - 短信
- WeChat - 微信
- Phone - 电话
     * @param string $NoticeContentId 通知内容模板ID，使用Default-zh引用默认模板（中文），使用Default-en引用DefaultTemplate(English)。-通过[获取通知内容模板](https://cloud.tencent.com/document/product/614/111714)获取通知内容模板ID
     * @param string $StartTime 允许接收信息的开始时间。格式：`15:04:05`。必填
     * @param string $EndTime 允许接收信息的结束时间。格式：`15:04:05`。必填
     * @param integer $Index 位序。

- 入参时无效。
- 出参时有效。
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
        if (array_key_exists("ReceiverType",$param) and $param["ReceiverType"] !== null) {
            $this->ReceiverType = $param["ReceiverType"];
        }

        if (array_key_exists("ReceiverIds",$param) and $param["ReceiverIds"] !== null) {
            $this->ReceiverIds = $param["ReceiverIds"];
        }

        if (array_key_exists("ReceiverChannels",$param) and $param["ReceiverChannels"] !== null) {
            $this->ReceiverChannels = $param["ReceiverChannels"];
        }

        if (array_key_exists("NoticeContentId",$param) and $param["NoticeContentId"] !== null) {
            $this->NoticeContentId = $param["NoticeContentId"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("Index",$param) and $param["Index"] !== null) {
            $this->Index = $param["Index"];
        }
    }
}
