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
namespace TencentCloud\Dsgc\V20190723\Models;
use TencentCloud\Common\AbstractModel;

/**
 * BindDSPAResourceCosBuckets请求参数结构体
 *
 * @method string getDspaId() 获取DSPA实例ID。
 * @method void setDspaId(string $DspaId) 设置DSPA实例ID。
 * @method array getBindCosResourceItems() 获取绑定的COS桶信息。
 * @method void setBindCosResourceItems(array $BindCosResourceItems) 设置绑定的COS桶信息。
 * @method array getUnbindCosResourceItems() 获取解绑的COS桶信息。
 * @method void setUnbindCosResourceItems(array $UnbindCosResourceItems) 设置解绑的COS桶信息。
 */
class BindDSPAResourceCosBucketsRequest extends AbstractModel
{
    /**
     * @var string DSPA实例ID。
     */
    public $DspaId;

    /**
     * @var array 绑定的COS桶信息。
     */
    public $BindCosResourceItems;

    /**
     * @var array 解绑的COS桶信息。
     */
    public $UnbindCosResourceItems;

    /**
     * @param string $DspaId DSPA实例ID。
     * @param array $BindCosResourceItems 绑定的COS桶信息。
     * @param array $UnbindCosResourceItems 解绑的COS桶信息。
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
        if (array_key_exists("DspaId",$param) and $param["DspaId"] !== null) {
            $this->DspaId = $param["DspaId"];
        }

        if (array_key_exists("BindCosResourceItems",$param) and $param["BindCosResourceItems"] !== null) {
            $this->BindCosResourceItems = [];
            foreach ($param["BindCosResourceItems"] as $key => $value){
                $obj = new CosResourceItem();
                $obj->deserialize($value);
                array_push($this->BindCosResourceItems, $obj);
            }
        }

        if (array_key_exists("UnbindCosResourceItems",$param) and $param["UnbindCosResourceItems"] !== null) {
            $this->UnbindCosResourceItems = [];
            foreach ($param["UnbindCosResourceItems"] as $key => $value){
                $obj = new CosResourceItem();
                $obj->deserialize($value);
                array_push($this->UnbindCosResourceItems, $obj);
            }
        }
    }
}
