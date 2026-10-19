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
namespace TencentCloud\Tione\V20211111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeleteTrainingModelVersion请求参数结构体
 *
 * @method string getTrainingModelVersionId() 获取模型版本ID
 * @method void setTrainingModelVersionId(string $TrainingModelVersionId) 设置模型版本ID
 * @method string getTiProjectId() 获取<p>TI工作空间ID</p><p>使用非默认空间必须填写工作空间ID，使用默认空间无需填写工作空间ID。</p>
 * @method void setTiProjectId(string $TiProjectId) 设置<p>TI工作空间ID</p><p>使用非默认空间必须填写工作空间ID，使用默认空间无需填写工作空间ID。</p>
 * @method boolean getEnableDeleteCos() 获取是否同步清理cos
 * @method void setEnableDeleteCos(boolean $EnableDeleteCos) 设置是否同步清理cos
 */
class DeleteTrainingModelVersionRequest extends AbstractModel
{
    /**
     * @var string 模型版本ID
     */
    public $TrainingModelVersionId;

    /**
     * @var string <p>TI工作空间ID</p><p>使用非默认空间必须填写工作空间ID，使用默认空间无需填写工作空间ID。</p>
     */
    public $TiProjectId;

    /**
     * @var boolean 是否同步清理cos
     */
    public $EnableDeleteCos;

    /**
     * @param string $TrainingModelVersionId 模型版本ID
     * @param string $TiProjectId <p>TI工作空间ID</p><p>使用非默认空间必须填写工作空间ID，使用默认空间无需填写工作空间ID。</p>
     * @param boolean $EnableDeleteCos 是否同步清理cos
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
        if (array_key_exists("TrainingModelVersionId",$param) and $param["TrainingModelVersionId"] !== null) {
            $this->TrainingModelVersionId = $param["TrainingModelVersionId"];
        }

        if (array_key_exists("TiProjectId",$param) and $param["TiProjectId"] !== null) {
            $this->TiProjectId = $param["TiProjectId"];
        }

        if (array_key_exists("EnableDeleteCos",$param) and $param["EnableDeleteCos"] !== null) {
            $this->EnableDeleteCos = $param["EnableDeleteCos"];
        }
    }
}
