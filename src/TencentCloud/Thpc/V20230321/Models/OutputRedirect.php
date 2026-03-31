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
namespace TencentCloud\Thpc\V20230321\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 输出重定向配置
 *
 * @method string getDriver() 获取<p>输出driver类型</p><p>枚举值：</p><ul><li>local： 宿主机本地目录</li><li>cos： 远端cos存储</li></ul><p>默认值：local</p>
 * @method void setDriver(string $Driver) 设置<p>输出driver类型</p><p>枚举值：</p><ul><li>local： 宿主机本地目录</li><li>cos： 远端cos存储</li></ul><p>默认值：local</p>
 * @method array getOptions() 获取<p>重定向配置参数</p><p>日志重定向路径，用于指定任务日志的输出目标。取值格式与 Driver 类型关联：<br>当 Driver 为 local 时，格式为本地文件路径，如 stdout=/tmp/train_out.log；<br>当 Driver 为 cos 时，格式为 COS 存储桶路径，如 stdout=cos://test-123456.cos.ap-shanghai.myqcloud.com/test/.</p>
 * @method void setOptions(array $Options) 设置<p>重定向配置参数</p><p>日志重定向路径，用于指定任务日志的输出目标。取值格式与 Driver 类型关联：<br>当 Driver 为 local 时，格式为本地文件路径，如 stdout=/tmp/train_out.log；<br>当 Driver 为 cos 时，格式为 COS 存储桶路径，如 stdout=cos://test-123456.cos.ap-shanghai.myqcloud.com/test/.</p>
 */
class OutputRedirect extends AbstractModel
{
    /**
     * @var string <p>输出driver类型</p><p>枚举值：</p><ul><li>local： 宿主机本地目录</li><li>cos： 远端cos存储</li></ul><p>默认值：local</p>
     */
    public $Driver;

    /**
     * @var array <p>重定向配置参数</p><p>日志重定向路径，用于指定任务日志的输出目标。取值格式与 Driver 类型关联：<br>当 Driver 为 local 时，格式为本地文件路径，如 stdout=/tmp/train_out.log；<br>当 Driver 为 cos 时，格式为 COS 存储桶路径，如 stdout=cos://test-123456.cos.ap-shanghai.myqcloud.com/test/.</p>
     */
    public $Options;

    /**
     * @param string $Driver <p>输出driver类型</p><p>枚举值：</p><ul><li>local： 宿主机本地目录</li><li>cos： 远端cos存储</li></ul><p>默认值：local</p>
     * @param array $Options <p>重定向配置参数</p><p>日志重定向路径，用于指定任务日志的输出目标。取值格式与 Driver 类型关联：<br>当 Driver 为 local 时，格式为本地文件路径，如 stdout=/tmp/train_out.log；<br>当 Driver 为 cos 时，格式为 COS 存储桶路径，如 stdout=cos://test-123456.cos.ap-shanghai.myqcloud.com/test/.</p>
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
        if (array_key_exists("Driver",$param) and $param["Driver"] !== null) {
            $this->Driver = $param["Driver"];
        }

        if (array_key_exists("Options",$param) and $param["Options"] !== null) {
            $this->Options = $param["Options"];
        }
    }
}
