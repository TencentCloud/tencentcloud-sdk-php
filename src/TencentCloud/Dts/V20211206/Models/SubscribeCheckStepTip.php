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
namespace TencentCloud\Dts\V20211206\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 订阅校验任务的提示信息
 *
 * @method string getMessage() 获取错误或告警的详细信息
 * @method void setMessage(string $Message) 设置错误或告警的详细信息
 * @method string getHelpDoc() 获取帮助文档
 * @method void setHelpDoc(string $HelpDoc) 设置帮助文档
 */
class SubscribeCheckStepTip extends AbstractModel
{
    /**
     * @var string 错误或告警的详细信息
     */
    public $Message;

    /**
     * @var string 帮助文档
     */
    public $HelpDoc;

    /**
     * @param string $Message 错误或告警的详细信息
     * @param string $HelpDoc 帮助文档
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
        if (array_key_exists("Message",$param) and $param["Message"] !== null) {
            $this->Message = $param["Message"];
        }

        if (array_key_exists("HelpDoc",$param) and $param["HelpDoc"] !== null) {
            $this->HelpDoc = $param["HelpDoc"];
        }
    }
}
