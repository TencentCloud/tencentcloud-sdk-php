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
namespace TencentCloud\Cngw\V20230418\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 用于定义kong插件自定义健康检查的配置
 *
 * @method string getHealthCheckType() 获取<p>健康检查类型</p><p>枚举值：</p><ul><li>MCP： 标准mcp</li><li>HTTP： http</li></ul>
 * @method void setHealthCheckType(string $HealthCheckType) 设置<p>健康检查类型</p><p>枚举值：</p><ul><li>MCP： 标准mcp</li><li>HTTP： http</li></ul>
 * @method integer getHealthCheckIntervalSecond() 获取<p>检查间隔</p>
 * @method void setHealthCheckIntervalSecond(integer $HealthCheckIntervalSecond) 设置<p>检查间隔</p>
 * @method integer getHealthCheckTimeout() 获取<p>检查超时时间</p>
 * @method void setHealthCheckTimeout(integer $HealthCheckTimeout) 设置<p>检查超时时间</p>
 * @method integer getHealthCheckFailThreshold() 获取<p>检查失败阈值</p>
 * @method void setHealthCheckFailThreshold(integer $HealthCheckFailThreshold) 设置<p>检查失败阈值</p>
 * @method integer getHealthCheckRecoverThreshold() 获取<p>检查恢复阈值</p>
 * @method void setHealthCheckRecoverThreshold(integer $HealthCheckRecoverThreshold) 设置<p>检查恢复阈值</p>
 * @method string getHealthCheckPath() 获取<p>检查路径</p>
 * @method void setHealthCheckPath(string $HealthCheckPath) 设置<p>检查路径</p>
 * @method string getHealthCheckMethod() 获取<p>检查方法</p>
 * @method void setHealthCheckMethod(string $HealthCheckMethod) 设置<p>检查方法</p>
 */
class AIGWHealthCheckSetting extends AbstractModel
{
    /**
     * @var string <p>健康检查类型</p><p>枚举值：</p><ul><li>MCP： 标准mcp</li><li>HTTP： http</li></ul>
     */
    public $HealthCheckType;

    /**
     * @var integer <p>检查间隔</p>
     */
    public $HealthCheckIntervalSecond;

    /**
     * @var integer <p>检查超时时间</p>
     */
    public $HealthCheckTimeout;

    /**
     * @var integer <p>检查失败阈值</p>
     */
    public $HealthCheckFailThreshold;

    /**
     * @var integer <p>检查恢复阈值</p>
     */
    public $HealthCheckRecoverThreshold;

    /**
     * @var string <p>检查路径</p>
     */
    public $HealthCheckPath;

    /**
     * @var string <p>检查方法</p>
     */
    public $HealthCheckMethod;

    /**
     * @param string $HealthCheckType <p>健康检查类型</p><p>枚举值：</p><ul><li>MCP： 标准mcp</li><li>HTTP： http</li></ul>
     * @param integer $HealthCheckIntervalSecond <p>检查间隔</p>
     * @param integer $HealthCheckTimeout <p>检查超时时间</p>
     * @param integer $HealthCheckFailThreshold <p>检查失败阈值</p>
     * @param integer $HealthCheckRecoverThreshold <p>检查恢复阈值</p>
     * @param string $HealthCheckPath <p>检查路径</p>
     * @param string $HealthCheckMethod <p>检查方法</p>
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
        if (array_key_exists("HealthCheckType",$param) and $param["HealthCheckType"] !== null) {
            $this->HealthCheckType = $param["HealthCheckType"];
        }

        if (array_key_exists("HealthCheckIntervalSecond",$param) and $param["HealthCheckIntervalSecond"] !== null) {
            $this->HealthCheckIntervalSecond = $param["HealthCheckIntervalSecond"];
        }

        if (array_key_exists("HealthCheckTimeout",$param) and $param["HealthCheckTimeout"] !== null) {
            $this->HealthCheckTimeout = $param["HealthCheckTimeout"];
        }

        if (array_key_exists("HealthCheckFailThreshold",$param) and $param["HealthCheckFailThreshold"] !== null) {
            $this->HealthCheckFailThreshold = $param["HealthCheckFailThreshold"];
        }

        if (array_key_exists("HealthCheckRecoverThreshold",$param) and $param["HealthCheckRecoverThreshold"] !== null) {
            $this->HealthCheckRecoverThreshold = $param["HealthCheckRecoverThreshold"];
        }

        if (array_key_exists("HealthCheckPath",$param) and $param["HealthCheckPath"] !== null) {
            $this->HealthCheckPath = $param["HealthCheckPath"];
        }

        if (array_key_exists("HealthCheckMethod",$param) and $param["HealthCheckMethod"] !== null) {
            $this->HealthCheckMethod = $param["HealthCheckMethod"];
        }
    }
}
