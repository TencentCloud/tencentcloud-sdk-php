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
namespace TencentCloud\Cvm\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 描述了实例CPU拓扑结构的相关信息。
 *
 * @method integer getCoreCount() 获取决定启用的CPU物理核心数。
 * @method void setCoreCount(integer $CoreCount) 设置决定启用的CPU物理核心数。
 * @method integer getThreadPerCore() 获取每核心线程数。该参数决定是否开启或关闭超线程。<br><li>1 表示关闭超线程 </li><br><li>2 表示开启超线程</li>
 不设置时，实例使用默认的超线程策略。开关超线程请参考文档：[开启与关闭超线程](https://cloud.tencent.com/document/product/213/103798)。
 * @method void setThreadPerCore(integer $ThreadPerCore) 设置每核心线程数。该参数决定是否开启或关闭超线程。<br><li>1 表示关闭超线程 </li><br><li>2 表示开启超线程</li>
 不设置时，实例使用默认的超线程策略。开关超线程请参考文档：[开启与关闭超线程](https://cloud.tencent.com/document/product/213/103798)。
 */
class CpuTopology extends AbstractModel
{
    /**
     * @var integer 决定启用的CPU物理核心数。
     */
    public $CoreCount;

    /**
     * @var integer 每核心线程数。该参数决定是否开启或关闭超线程。<br><li>1 表示关闭超线程 </li><br><li>2 表示开启超线程</li>
 不设置时，实例使用默认的超线程策略。开关超线程请参考文档：[开启与关闭超线程](https://cloud.tencent.com/document/product/213/103798)。
     */
    public $ThreadPerCore;

    /**
     * @param integer $CoreCount 决定启用的CPU物理核心数。
     * @param integer $ThreadPerCore 每核心线程数。该参数决定是否开启或关闭超线程。<br><li>1 表示关闭超线程 </li><br><li>2 表示开启超线程</li>
 不设置时，实例使用默认的超线程策略。开关超线程请参考文档：[开启与关闭超线程](https://cloud.tencent.com/document/product/213/103798)。
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
        if (array_key_exists("CoreCount",$param) and $param["CoreCount"] !== null) {
            $this->CoreCount = $param["CoreCount"];
        }

        if (array_key_exists("ThreadPerCore",$param) and $param["ThreadPerCore"] !== null) {
            $this->ThreadPerCore = $param["ThreadPerCore"];
        }
    }
}
