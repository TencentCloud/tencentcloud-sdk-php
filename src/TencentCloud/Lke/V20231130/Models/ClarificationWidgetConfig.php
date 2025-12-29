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
namespace TencentCloud\Lke\V20231130\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 澄清widget配置
 *
 * @method string getWidgetId() 获取widget id
 * @method void setWidgetId(string $WidgetId) 设置widget id
 * @method integer getClarificationWidgetType() 获取澄清widget类型
 * @method void setClarificationWidgetType(integer $ClarificationWidgetType) 设置澄清widget类型
 * @method string getWidgetName() 获取Widget名称
 * @method void setWidgetName(string $WidgetName) 设置Widget名称
 * @method string getWidgetPreview() 获取Widget预览
 * @method void setWidgetPreview(string $WidgetPreview) 设置Widget预览
 * @method boolean getEnabled() 获取是否启用该Widget作为澄清样式
 * @method void setEnabled(boolean $Enabled) 设置是否启用该Widget作为澄清样式
 */
class ClarificationWidgetConfig extends AbstractModel
{
    /**
     * @var string widget id
     */
    public $WidgetId;

    /**
     * @var integer 澄清widget类型
     */
    public $ClarificationWidgetType;

    /**
     * @var string Widget名称
     */
    public $WidgetName;

    /**
     * @var string Widget预览
     */
    public $WidgetPreview;

    /**
     * @var boolean 是否启用该Widget作为澄清样式
     */
    public $Enabled;

    /**
     * @param string $WidgetId widget id
     * @param integer $ClarificationWidgetType 澄清widget类型
     * @param string $WidgetName Widget名称
     * @param string $WidgetPreview Widget预览
     * @param boolean $Enabled 是否启用该Widget作为澄清样式
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
        if (array_key_exists("WidgetId",$param) and $param["WidgetId"] !== null) {
            $this->WidgetId = $param["WidgetId"];
        }

        if (array_key_exists("ClarificationWidgetType",$param) and $param["ClarificationWidgetType"] !== null) {
            $this->ClarificationWidgetType = $param["ClarificationWidgetType"];
        }

        if (array_key_exists("WidgetName",$param) and $param["WidgetName"] !== null) {
            $this->WidgetName = $param["WidgetName"];
        }

        if (array_key_exists("WidgetPreview",$param) and $param["WidgetPreview"] !== null) {
            $this->WidgetPreview = $param["WidgetPreview"];
        }

        if (array_key_exists("Enabled",$param) and $param["Enabled"] !== null) {
            $this->Enabled = $param["Enabled"];
        }
    }
}
