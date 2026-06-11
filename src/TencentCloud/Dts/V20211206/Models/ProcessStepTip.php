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
namespace TencentCloud\Dts\V20211206\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 错误信息及告警信息对象
 *
 * @method string getMessage() 获取<p>提示信息</p>
 * @method void setMessage(string $Message) 设置<p>提示信息</p>
 * @method string getSolution() 获取<p>解决方案</p>
 * @method void setSolution(string $Solution) 设置<p>解决方案</p>
 * @method string getHelpDoc() 获取<p>文档提示</p>
 * @method void setHelpDoc(string $HelpDoc) 设置<p>文档提示</p>
 */
class ProcessStepTip extends AbstractModel
{
    /**
     * @var string <p>提示信息</p>
     */
    public $Message;

    /**
     * @var string <p>解决方案</p>
     */
    public $Solution;

    /**
     * @var string <p>文档提示</p>
     */
    public $HelpDoc;

    /**
     * @param string $Message <p>提示信息</p>
     * @param string $Solution <p>解决方案</p>
     * @param string $HelpDoc <p>文档提示</p>
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

        if (array_key_exists("Solution",$param) and $param["Solution"] !== null) {
            $this->Solution = $param["Solution"];
        }

        if (array_key_exists("HelpDoc",$param) and $param["HelpDoc"] !== null) {
            $this->HelpDoc = $param["HelpDoc"];
        }
    }
}
