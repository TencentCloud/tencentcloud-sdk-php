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
namespace TencentCloud\Waf\V20180125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 攻击日志详情
 *
 * @method string getContent() 获取攻击日志的详情内容
 * @method void setContent(string $Content) 设置攻击日志的详情内容
 * @method string getFileName() 获取CLS返回内容
 * @method void setFileName(string $FileName) 设置CLS返回内容
 * @method string getSource() 获取CLS返回内容
 * @method void setSource(string $Source) 设置CLS返回内容
 * @method string getTimeStamp() 获取CLS返回内容
 * @method void setTimeStamp(string $TimeStamp) 设置CLS返回内容
 */
class AttackLogInfo extends AbstractModel
{
    /**
     * @var string 攻击日志的详情内容
     */
    public $Content;

    /**
     * @var string CLS返回内容
     */
    public $FileName;

    /**
     * @var string CLS返回内容
     */
    public $Source;

    /**
     * @var string CLS返回内容
     */
    public $TimeStamp;

    /**
     * @param string $Content 攻击日志的详情内容
     * @param string $FileName CLS返回内容
     * @param string $Source CLS返回内容
     * @param string $TimeStamp CLS返回内容
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
        if (array_key_exists("Content",$param) and $param["Content"] !== null) {
            $this->Content = $param["Content"];
        }

        if (array_key_exists("FileName",$param) and $param["FileName"] !== null) {
            $this->FileName = $param["FileName"];
        }

        if (array_key_exists("Source",$param) and $param["Source"] !== null) {
            $this->Source = $param["Source"];
        }

        if (array_key_exists("TimeStamp",$param) and $param["TimeStamp"] !== null) {
            $this->TimeStamp = $param["TimeStamp"];
        }
    }
}
