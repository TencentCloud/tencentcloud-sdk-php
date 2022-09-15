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
namespace TencentCloud\Tke\V20180525\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeletePrometheusTempSync请求参数结构体
 *
 * @method string getTemplateId() 获取模板id
 * @method void setTemplateId(string $TemplateId) 设置模板id
 * @method array getTargets() 获取取消同步的对象列表
 * @method void setTargets(array $Targets) 设置取消同步的对象列表
 */
class DeletePrometheusTempSyncRequest extends AbstractModel
{
    /**
     * @var string 模板id
     */
    public $TemplateId;

    /**
     * @var array 取消同步的对象列表
     */
    public $Targets;

    /**
     * @param string $TemplateId 模板id
     * @param array $Targets 取消同步的对象列表
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
        if (array_key_exists("TemplateId",$param) and $param["TemplateId"] !== null) {
            $this->TemplateId = $param["TemplateId"];
        }

        if (array_key_exists("Targets",$param) and $param["Targets"] !== null) {
            $this->Targets = [];
            foreach ($param["Targets"] as $key => $value){
                $obj = new PrometheusTemplateSyncTarget();
                $obj->deserialize($value);
                array_push($this->Targets, $obj);
            }
        }
    }
}
