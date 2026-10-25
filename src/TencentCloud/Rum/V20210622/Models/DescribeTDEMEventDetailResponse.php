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
namespace TencentCloud\Rum\V20210622\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeTDEMEventDetail返回参数结构体
 *
 * @method EventView getEvent() 获取<p>事件主表视图</p>
 * @method void setEvent(EventView $Event) 设置<p>事件主表视图</p>
 * @method SymbolicatedView getSymbolicated() 获取<p>符号化结果，未翻译时可省略</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSymbolicated(SymbolicatedView $Symbolicated) 设置<p>符号化结果，未翻译时可省略</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeTDEMEventDetailResponse extends AbstractModel
{
    /**
     * @var EventView <p>事件主表视图</p>
     */
    public $Event;

    /**
     * @var SymbolicatedView <p>符号化结果，未翻译时可省略</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Symbolicated;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param EventView $Event <p>事件主表视图</p>
     * @param SymbolicatedView $Symbolicated <p>符号化结果，未翻译时可省略</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RequestId 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("Event",$param) and $param["Event"] !== null) {
            $this->Event = new EventView();
            $this->Event->deserialize($param["Event"]);
        }

        if (array_key_exists("Symbolicated",$param) and $param["Symbolicated"] !== null) {
            $this->Symbolicated = new SymbolicatedView();
            $this->Symbolicated->deserialize($param["Symbolicated"]);
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
