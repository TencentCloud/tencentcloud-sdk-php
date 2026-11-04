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
 * 访问规则
 *
 * @method string getModule() 获取<p>模块</p>
 * @method void setModule(string $Module) 设置<p>模块</p>
 * @method array getActionType() 获取<p>功能权限点</p>
 * @method void setActionType(array $ActionType) 设置<p>功能权限点</p>
 * @method array getDataActionType() 获取<p>数据权限点</p>
 * @method void setDataActionType(array $DataActionType) 设置<p>数据权限点</p>
 * @method array getActionTypeName() 获取<p>功能权限点名称</p>
 * @method void setActionTypeName(array $ActionTypeName) 设置<p>功能权限点名称</p>
 */
class AccessRule extends AbstractModel
{
    /**
     * @var string <p>模块</p>
     */
    public $Module;

    /**
     * @var array <p>功能权限点</p>
     */
    public $ActionType;

    /**
     * @var array <p>数据权限点</p>
     */
    public $DataActionType;

    /**
     * @var array <p>功能权限点名称</p>
     */
    public $ActionTypeName;

    /**
     * @param string $Module <p>模块</p>
     * @param array $ActionType <p>功能权限点</p>
     * @param array $DataActionType <p>数据权限点</p>
     * @param array $ActionTypeName <p>功能权限点名称</p>
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
        if (array_key_exists("Module",$param) and $param["Module"] !== null) {
            $this->Module = $param["Module"];
        }

        if (array_key_exists("ActionType",$param) and $param["ActionType"] !== null) {
            $this->ActionType = $param["ActionType"];
        }

        if (array_key_exists("DataActionType",$param) and $param["DataActionType"] !== null) {
            $this->DataActionType = $param["DataActionType"];
        }

        if (array_key_exists("ActionTypeName",$param) and $param["ActionTypeName"] !== null) {
            $this->ActionTypeName = $param["ActionTypeName"];
        }
    }
}
