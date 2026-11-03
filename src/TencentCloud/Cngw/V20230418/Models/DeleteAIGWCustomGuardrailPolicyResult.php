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
 * 删除自定义安全护栏策略结果
 *
 * @method boolean getSuccess() 获取<p>是否完成插件投影清理并删除策略。false 时策略保留供重试，应检查 FailedResources。</p>
 * @method void setSuccess(boolean $Success) 设置<p>是否完成插件投影清理并删除策略。false 时策略保留供重试，应检查 FailedResources。</p>
 * @method array getFailedResources() 获取<p>投影清理失败的业务资源</p>
 * @method void setFailedResources(array $FailedResources) 设置<p>投影清理失败的业务资源</p>
 */
class DeleteAIGWCustomGuardrailPolicyResult extends AbstractModel
{
    /**
     * @var boolean <p>是否完成插件投影清理并删除策略。false 时策略保留供重试，应检查 FailedResources。</p>
     */
    public $Success;

    /**
     * @var array <p>投影清理失败的业务资源</p>
     */
    public $FailedResources;

    /**
     * @param boolean $Success <p>是否完成插件投影清理并删除策略。false 时策略保留供重试，应检查 FailedResources。</p>
     * @param array $FailedResources <p>投影清理失败的业务资源</p>
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
        if (array_key_exists("Success",$param) and $param["Success"] !== null) {
            $this->Success = $param["Success"];
        }

        if (array_key_exists("FailedResources",$param) and $param["FailedResources"] !== null) {
            $this->FailedResources = [];
            foreach ($param["FailedResources"] as $key => $value){
                $obj = new CustomGuardrailSyncFailure();
                $obj->deserialize($value);
                array_push($this->FailedResources, $obj);
            }
        }
    }
}
