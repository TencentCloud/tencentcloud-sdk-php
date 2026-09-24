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
namespace TencentCloud\Ioa\V20220601\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 取消绑定账户虚拟组响应数据
 *
 * @method array getFailItems() 获取<p>解绑失败明细（含失败原因）</p>
 * @method void setFailItems(array $FailItems) 设置<p>解绑失败明细（含失败原因）</p>
 * @method array getSuccessItems() 获取<p>解绑成功明细（含幂等场景：本就未绑定的账号也归入成功）</p>
 * @method void setSuccessItems(array $SuccessItems) 设置<p>解绑成功明细（含幂等场景：本就未绑定的账号也归入成功）</p>
 */
class UnbindVirtualAccountData extends AbstractModel
{
    /**
     * @var array <p>解绑失败明细（含失败原因）</p>
     */
    public $FailItems;

    /**
     * @var array <p>解绑成功明细（含幂等场景：本就未绑定的账号也归入成功）</p>
     */
    public $SuccessItems;

    /**
     * @param array $FailItems <p>解绑失败明细（含失败原因）</p>
     * @param array $SuccessItems <p>解绑成功明细（含幂等场景：本就未绑定的账号也归入成功）</p>
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
        if (array_key_exists("FailItems",$param) and $param["FailItems"] !== null) {
            $this->FailItems = [];
            foreach ($param["FailItems"] as $key => $value){
                $obj = new BindVirtualAccountResultData();
                $obj->deserialize($value);
                array_push($this->FailItems, $obj);
            }
        }

        if (array_key_exists("SuccessItems",$param) and $param["SuccessItems"] !== null) {
            $this->SuccessItems = [];
            foreach ($param["SuccessItems"] as $key => $value){
                $obj = new BindVirtualAccountResultData();
                $obj->deserialize($value);
                array_push($this->SuccessItems, $obj);
            }
        }
    }
}
