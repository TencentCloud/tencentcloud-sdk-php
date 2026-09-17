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
 * ModifyCLSDeliverTask请求参数结构体
 *
 * @method string getTaskId() 获取<p>任务id</p>
 * @method void setTaskId(string $TaskId) 设置<p>任务id</p>
 * @method string getTaskName() 获取<p>任务名称</p><p>参数格式：<code>^[a-zA-Z0-9_-]{1,64}$</code></p>
 * @method void setTaskName(string $TaskName) 设置<p>任务名称</p><p>参数格式：<code>^[a-zA-Z0-9_-]{1,64}$</code></p>
 * @method SourceTopicConfig getSourceTopicConfig() 获取<p>源主题信息</p>
 * @method void setSourceTopicConfig(SourceTopicConfig $SourceTopicConfig) 设置<p>源主题信息</p>
 * @method TargetTopicConfig getTargetTopicConfig() 获取<p>目标主题信息</p>
 * @method void setTargetTopicConfig(TargetTopicConfig $TargetTopicConfig) 设置<p>目标主题信息</p>
 * @method DeliverRule getDeliverRule() 获取<p>投递规则</p>
 * @method void setDeliverRule(DeliverRule $DeliverRule) 设置<p>投递规则</p>
 * @method integer getEnable() 获取<p>状态</p><p>枚举值：</p><ul><li>0： 运行</li><li>1： 暂停</li></ul>
 * @method void setEnable(integer $Enable) 设置<p>状态</p><p>枚举值：</p><ul><li>0： 运行</li><li>1： 暂停</li></ul>
 * @method integer getHasServicesLog() 获取<p>是否开启投递服务日志。</p><p>枚举值：</p><ul><li>1： 关闭</li><li>2： 开启</li></ul>
 * @method void setHasServicesLog(integer $HasServicesLog) 设置<p>是否开启投递服务日志。</p><p>枚举值：</p><ul><li>1： 关闭</li><li>2： 开启</li></ul>
 */
class ModifyCLSDeliverTaskRequest extends AbstractModel
{
    /**
     * @var string <p>任务id</p>
     */
    public $TaskId;

    /**
     * @var string <p>任务名称</p><p>参数格式：<code>^[a-zA-Z0-9_-]{1,64}$</code></p>
     */
    public $TaskName;

    /**
     * @var SourceTopicConfig <p>源主题信息</p>
     */
    public $SourceTopicConfig;

    /**
     * @var TargetTopicConfig <p>目标主题信息</p>
     */
    public $TargetTopicConfig;

    /**
     * @var DeliverRule <p>投递规则</p>
     */
    public $DeliverRule;

    /**
     * @var integer <p>状态</p><p>枚举值：</p><ul><li>0： 运行</li><li>1： 暂停</li></ul>
     */
    public $Enable;

    /**
     * @var integer <p>是否开启投递服务日志。</p><p>枚举值：</p><ul><li>1： 关闭</li><li>2： 开启</li></ul>
     */
    public $HasServicesLog;

    /**
     * @param string $TaskId <p>任务id</p>
     * @param string $TaskName <p>任务名称</p><p>参数格式：<code>^[a-zA-Z0-9_-]{1,64}$</code></p>
     * @param SourceTopicConfig $SourceTopicConfig <p>源主题信息</p>
     * @param TargetTopicConfig $TargetTopicConfig <p>目标主题信息</p>
     * @param DeliverRule $DeliverRule <p>投递规则</p>
     * @param integer $Enable <p>状态</p><p>枚举值：</p><ul><li>0： 运行</li><li>1： 暂停</li></ul>
     * @param integer $HasServicesLog <p>是否开启投递服务日志。</p><p>枚举值：</p><ul><li>1： 关闭</li><li>2： 开启</li></ul>
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
        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("TaskName",$param) and $param["TaskName"] !== null) {
            $this->TaskName = $param["TaskName"];
        }

        if (array_key_exists("SourceTopicConfig",$param) and $param["SourceTopicConfig"] !== null) {
            $this->SourceTopicConfig = new SourceTopicConfig();
            $this->SourceTopicConfig->deserialize($param["SourceTopicConfig"]);
        }

        if (array_key_exists("TargetTopicConfig",$param) and $param["TargetTopicConfig"] !== null) {
            $this->TargetTopicConfig = new TargetTopicConfig();
            $this->TargetTopicConfig->deserialize($param["TargetTopicConfig"]);
        }

        if (array_key_exists("DeliverRule",$param) and $param["DeliverRule"] !== null) {
            $this->DeliverRule = new DeliverRule();
            $this->DeliverRule->deserialize($param["DeliverRule"]);
        }

        if (array_key_exists("Enable",$param) and $param["Enable"] !== null) {
            $this->Enable = $param["Enable"];
        }

        if (array_key_exists("HasServicesLog",$param) and $param["HasServicesLog"] !== null) {
            $this->HasServicesLog = $param["HasServicesLog"];
        }
    }
}
