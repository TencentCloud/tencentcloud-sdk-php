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
namespace TencentCloud\Scf\V20180416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 会话参数
 *
 * @method string getSessionSource() 获取session 来源，三选一：'HEADER', 'COOKIE', 'QUERY_STRING' 
 * @method void setSessionSource(string $SessionSource) 设置session 来源，三选一：'HEADER', 'COOKIE', 'QUERY_STRING' 
 * @method string getSessionName() 获取session 名称，以字母开头，非首字母可包含数字、字母、下划线、中划线，长度5-40个字符
 * @method void setSessionName(string $SessionName) 设置session 名称，以字母开头，非首字母可包含数字、字母、下划线、中划线，长度5-40个字符
 * @method integer getMaximumConcurrencySessionPerInstance() 获取最大并发会话数
 * @method void setMaximumConcurrencySessionPerInstance(integer $MaximumConcurrencySessionPerInstance) 设置最大并发会话数
 * @method integer getMaximumTTLInSeconds() 获取生命周期
 * @method void setMaximumTTLInSeconds(integer $MaximumTTLInSeconds) 设置生命周期
 * @method integer getMaximumIdleTimeInSeconds() 获取空闲时长
 * @method void setMaximumIdleTimeInSeconds(integer $MaximumIdleTimeInSeconds) 设置空闲时长
 * @method string getSessionPath() 获取session 对应的路径信息
 * @method void setSessionPath(string $SessionPath) 设置session 对应的路径信息
 * @method string getIdleTimeoutStrategy() 获取自动销毁 FATAL、自动暂停PAUSE， 只有启动安全隔离的时候才会有
 * @method void setIdleTimeoutStrategy(string $IdleTimeoutStrategy) 设置自动销毁 FATAL、自动暂停PAUSE， 只有启动安全隔离的时候才会有
 */
class SessionConfig extends AbstractModel
{
    /**
     * @var string session 来源，三选一：'HEADER', 'COOKIE', 'QUERY_STRING' 
     */
    public $SessionSource;

    /**
     * @var string session 名称，以字母开头，非首字母可包含数字、字母、下划线、中划线，长度5-40个字符
     */
    public $SessionName;

    /**
     * @var integer 最大并发会话数
     */
    public $MaximumConcurrencySessionPerInstance;

    /**
     * @var integer 生命周期
     */
    public $MaximumTTLInSeconds;

    /**
     * @var integer 空闲时长
     */
    public $MaximumIdleTimeInSeconds;

    /**
     * @var string session 对应的路径信息
     */
    public $SessionPath;

    /**
     * @var string 自动销毁 FATAL、自动暂停PAUSE， 只有启动安全隔离的时候才会有
     */
    public $IdleTimeoutStrategy;

    /**
     * @param string $SessionSource session 来源，三选一：'HEADER', 'COOKIE', 'QUERY_STRING' 
     * @param string $SessionName session 名称，以字母开头，非首字母可包含数字、字母、下划线、中划线，长度5-40个字符
     * @param integer $MaximumConcurrencySessionPerInstance 最大并发会话数
     * @param integer $MaximumTTLInSeconds 生命周期
     * @param integer $MaximumIdleTimeInSeconds 空闲时长
     * @param string $SessionPath session 对应的路径信息
     * @param string $IdleTimeoutStrategy 自动销毁 FATAL、自动暂停PAUSE， 只有启动安全隔离的时候才会有
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
        if (array_key_exists("SessionSource",$param) and $param["SessionSource"] !== null) {
            $this->SessionSource = $param["SessionSource"];
        }

        if (array_key_exists("SessionName",$param) and $param["SessionName"] !== null) {
            $this->SessionName = $param["SessionName"];
        }

        if (array_key_exists("MaximumConcurrencySessionPerInstance",$param) and $param["MaximumConcurrencySessionPerInstance"] !== null) {
            $this->MaximumConcurrencySessionPerInstance = $param["MaximumConcurrencySessionPerInstance"];
        }

        if (array_key_exists("MaximumTTLInSeconds",$param) and $param["MaximumTTLInSeconds"] !== null) {
            $this->MaximumTTLInSeconds = $param["MaximumTTLInSeconds"];
        }

        if (array_key_exists("MaximumIdleTimeInSeconds",$param) and $param["MaximumIdleTimeInSeconds"] !== null) {
            $this->MaximumIdleTimeInSeconds = $param["MaximumIdleTimeInSeconds"];
        }

        if (array_key_exists("SessionPath",$param) and $param["SessionPath"] !== null) {
            $this->SessionPath = $param["SessionPath"];
        }

        if (array_key_exists("IdleTimeoutStrategy",$param) and $param["IdleTimeoutStrategy"] !== null) {
            $this->IdleTimeoutStrategy = $param["IdleTimeoutStrategy"];
        }
    }
}
