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
namespace TencentCloud\Waf\V20180125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * SwitchElasticMode请求参数结构体
 *
 * @method string getEdition() 获取版本，只能是sparta-waf, clb-waf, cdn-waf
 * @method void setEdition(string $Edition) 设置版本，只能是sparta-waf, clb-waf, cdn-waf
 * @method integer getMode() 获取0代表关闭，1代表打开
 * @method void setMode(integer $Mode) 设置0代表关闭，1代表打开
 * @method string getInstanceID() 获取实例id
 * @method void setInstanceID(string $InstanceID) 设置实例id
 */
class SwitchElasticModeRequest extends AbstractModel
{
    /**
     * @var string 版本，只能是sparta-waf, clb-waf, cdn-waf
     */
    public $Edition;

    /**
     * @var integer 0代表关闭，1代表打开
     */
    public $Mode;

    /**
     * @var string 实例id
     */
    public $InstanceID;

    /**
     * @param string $Edition 版本，只能是sparta-waf, clb-waf, cdn-waf
     * @param integer $Mode 0代表关闭，1代表打开
     * @param string $InstanceID 实例id
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
        if (array_key_exists("Edition",$param) and $param["Edition"] !== null) {
            $this->Edition = $param["Edition"];
        }

        if (array_key_exists("Mode",$param) and $param["Mode"] !== null) {
            $this->Mode = $param["Mode"];
        }

        if (array_key_exists("InstanceID",$param) and $param["InstanceID"] !== null) {
            $this->InstanceID = $param["InstanceID"];
        }
    }
}
