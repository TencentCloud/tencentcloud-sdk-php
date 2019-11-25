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
namespace TencentCloud\Sms\V20190711\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method integer getBillingStatistics() 获取短信计费条数统计，例如提交成功量为100条，其中有20条是长短信（长度为80字）被拆分成2条，则计费条数为： ```80 * 1 + 20 * 2 = 120``` 条
 * @method void setBillingStatistics(integer $BillingStatistics) 设置短信计费条数统计，例如提交成功量为100条，其中有20条是长短信（长度为80字）被拆分成2条，则计费条数为： ```80 * 1 + 20 * 2 = 120``` 条
 * @method integer getRequestStatistics() 获取短信提交量统计
 * @method void setRequestStatistics(integer $RequestStatistics) 设置短信提交量统计
 * @method integer getRequestSuccessStatistics() 获取短信提交成功量统计
 * @method void setRequestSuccessStatistics(integer $RequestSuccessStatistics) 设置短信提交成功量统计
 */

/**
 *发送数据统计响应包体
 */
class SendStatusStatistics extends AbstractModel
{
    /**
     * @var integer 短信计费条数统计，例如提交成功量为100条，其中有20条是长短信（长度为80字）被拆分成2条，则计费条数为： ```80 * 1 + 20 * 2 = 120``` 条
     */
    public $BillingStatistics;

    /**
     * @var integer 短信提交量统计
     */
    public $RequestStatistics;

    /**
     * @var integer 短信提交成功量统计
     */
    public $RequestSuccessStatistics;
    /**
     * @param integer $BillingStatistics 短信计费条数统计，例如提交成功量为100条，其中有20条是长短信（长度为80字）被拆分成2条，则计费条数为： ```80 * 1 + 20 * 2 = 120``` 条
     * @param integer $RequestStatistics 短信提交量统计
     * @param integer $RequestSuccessStatistics 短信提交成功量统计
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("BillingStatistics",$param) and $param["BillingStatistics"] !== null) {
            $this->BillingStatistics = $param["BillingStatistics"];
        }

        if (array_key_exists("RequestStatistics",$param) and $param["RequestStatistics"] !== null) {
            $this->RequestStatistics = $param["RequestStatistics"];
        }

        if (array_key_exists("RequestSuccessStatistics",$param) and $param["RequestSuccessStatistics"] !== null) {
            $this->RequestSuccessStatistics = $param["RequestSuccessStatistics"];
        }
    }
}
