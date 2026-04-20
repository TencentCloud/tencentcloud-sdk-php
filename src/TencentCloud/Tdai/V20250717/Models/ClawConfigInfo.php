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
namespace TencentCloud\Tdai\V20250717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * databaseClaw实例配置信息
 *
 * @method integer getTemplateId() 获取<p>无</p>
 * @method void setTemplateId(integer $TemplateId) 设置<p>无</p>
 * @method array getDbTypes() 获取<p>无</p>
 * @method void setDbTypes(array $DbTypes) 设置<p>无</p>
 * @method ClawDeployInfo getDeploy() 获取<p>无</p>
 * @method void setDeploy(ClawDeployInfo $Deploy) 设置<p>无</p>
 */
class ClawConfigInfo extends AbstractModel
{
    /**
     * @var integer <p>无</p>
     */
    public $TemplateId;

    /**
     * @var array <p>无</p>
     */
    public $DbTypes;

    /**
     * @var ClawDeployInfo <p>无</p>
     */
    public $Deploy;

    /**
     * @param integer $TemplateId <p>无</p>
     * @param array $DbTypes <p>无</p>
     * @param ClawDeployInfo $Deploy <p>无</p>
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

        if (array_key_exists("DbTypes",$param) and $param["DbTypes"] !== null) {
            $this->DbTypes = $param["DbTypes"];
        }

        if (array_key_exists("Deploy",$param) and $param["Deploy"] !== null) {
            $this->Deploy = new ClawDeployInfo();
            $this->Deploy->deserialize($param["Deploy"]);
        }
    }
}
