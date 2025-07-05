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
namespace TencentCloud\Cfg\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 动作栏位配置结果
 *
 * @method integer getActionId() 获取动作ID
 * @method void setActionId(integer $ActionId) 设置动作ID
 * @method string getActionName() 获取动作名称
 * @method void setActionName(string $ActionName) 设置动作名称
 * @method array getConfigDetail() 获取动作对应的栏位配置详情
 * @method void setConfigDetail(array $ConfigDetail) 设置动作对应的栏位配置详情
 */
class ActionFieldConfigResult extends AbstractModel
{
    /**
     * @var integer 动作ID
     */
    public $ActionId;

    /**
     * @var string 动作名称
     */
    public $ActionName;

    /**
     * @var array 动作对应的栏位配置详情
     */
    public $ConfigDetail;

    /**
     * @param integer $ActionId 动作ID
     * @param string $ActionName 动作名称
     * @param array $ConfigDetail 动作对应的栏位配置详情
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
        if (array_key_exists("ActionId",$param) and $param["ActionId"] !== null) {
            $this->ActionId = $param["ActionId"];
        }

        if (array_key_exists("ActionName",$param) and $param["ActionName"] !== null) {
            $this->ActionName = $param["ActionName"];
        }

        if (array_key_exists("ConfigDetail",$param) and $param["ConfigDetail"] !== null) {
            $this->ConfigDetail = [];
            foreach ($param["ConfigDetail"] as $key => $value){
                $obj = new ActionFieldConfigDetail();
                $obj->deserialize($value);
                array_push($this->ConfigDetail, $obj);
            }
        }
    }
}
