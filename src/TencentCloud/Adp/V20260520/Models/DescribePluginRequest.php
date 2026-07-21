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
namespace TencentCloud\Adp\V20260520\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribePlugin请求参数结构体
 *
 * @method string getPluginId() 获取<p>插件id</p>
 * @method void setPluginId(string $PluginId) 设置<p>插件id</p>
 * @method string getSpaceId() 获取<p>当前空间id</p>
 * @method void setSpaceId(string $SpaceId) 设置<p>当前空间id</p>
 * @method FieldMask getFieldMask() 获取<p>获取指定字段</p>
 * @method void setFieldMask(FieldMask $FieldMask) 设置<p>获取指定字段</p>
 * @method integer getModule() 获取<p>插件展示场景。不传或取 0 时不限定场景。</p><p>枚举值：</p><ul><li>0：不限定场景</li><li>1：Agent 模式</li><li>2：工作流</li><li>3：智能工作台</li></ul>
 * @method void setModule(integer $Module) 设置<p>插件展示场景。不传或取 0 时不限定场景。</p><p>枚举值：</p><ul><li>0：不限定场景</li><li>1：Agent 模式</li><li>2：工作流</li><li>3：智能工作台</li></ul>
 */
class DescribePluginRequest extends AbstractModel
{
    /**
     * @var string <p>插件id</p>
     */
    public $PluginId;

    /**
     * @var string <p>当前空间id</p>
     */
    public $SpaceId;

    /**
     * @var FieldMask <p>获取指定字段</p>
     */
    public $FieldMask;

    /**
     * @var integer <p>插件展示场景。不传或取 0 时不限定场景。</p><p>枚举值：</p><ul><li>0：不限定场景</li><li>1：Agent 模式</li><li>2：工作流</li><li>3：智能工作台</li></ul>
     */
    public $Module;

    /**
     * @param string $PluginId <p>插件id</p>
     * @param string $SpaceId <p>当前空间id</p>
     * @param FieldMask $FieldMask <p>获取指定字段</p>
     * @param integer $Module <p>插件展示场景。不传或取 0 时不限定场景。</p><p>枚举值：</p><ul><li>0：不限定场景</li><li>1：Agent 模式</li><li>2：工作流</li><li>3：智能工作台</li></ul>
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
        if (array_key_exists("PluginId",$param) and $param["PluginId"] !== null) {
            $this->PluginId = $param["PluginId"];
        }

        if (array_key_exists("SpaceId",$param) and $param["SpaceId"] !== null) {
            $this->SpaceId = $param["SpaceId"];
        }

        if (array_key_exists("FieldMask",$param) and $param["FieldMask"] !== null) {
            $this->FieldMask = new FieldMask();
            $this->FieldMask->deserialize($param["FieldMask"]);
        }

        if (array_key_exists("Module",$param) and $param["Module"] !== null) {
            $this->Module = $param["Module"];
        }
    }
}
