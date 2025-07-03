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
namespace TencentCloud\Weilingwith\V20230427\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 上报消息结果
 *
 * @method string getReportId() 获取上报消息对应下标的16位标识Id, 即第几个消息

 * @method void setReportId(string $ReportId) 设置上报消息对应下标的16位标识Id, 即第几个消息

 * @method integer getReportStatus() 获取上报消息结果，1表示成功推送，0表示推送失败

 * @method void setReportStatus(integer $ReportStatus) 设置上报消息结果，1表示成功推送，0表示推送失败
 */
class ReportMsgRes extends AbstractModel
{
    /**
     * @var string 上报消息对应下标的16位标识Id, 即第几个消息

     */
    public $ReportId;

    /**
     * @var integer 上报消息结果，1表示成功推送，0表示推送失败

     */
    public $ReportStatus;

    /**
     * @param string $ReportId 上报消息对应下标的16位标识Id, 即第几个消息

     * @param integer $ReportStatus 上报消息结果，1表示成功推送，0表示推送失败
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
        if (array_key_exists("ReportId",$param) and $param["ReportId"] !== null) {
            $this->ReportId = $param["ReportId"];
        }

        if (array_key_exists("ReportStatus",$param) and $param["ReportStatus"] !== null) {
            $this->ReportStatus = $param["ReportStatus"];
        }
    }
}
