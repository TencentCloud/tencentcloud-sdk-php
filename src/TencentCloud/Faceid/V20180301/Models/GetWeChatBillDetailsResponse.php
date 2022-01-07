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
namespace TencentCloud\Faceid\V20180301\Models;
use TencentCloud\Common\AbstractModel;

/**
 * GetWeChatBillDetails返回参数结构体
 *
 * @method boolean getHasNextPage() 获取是否还有下一页。该字段为true时，需要将NextCursor的值作为入参Cursor继续调用本接口。
 * @method void setHasNextPage(boolean $HasNextPage) 设置是否还有下一页。该字段为true时，需要将NextCursor的值作为入参Cursor继续调用本接口。
 * @method integer getNextCursor() 获取下一页的游标。用于分页。
 * @method void setNextCursor(integer $NextCursor) 设置下一页的游标。用于分页。
 * @method array getWeChatBillDetails() 获取数据
 * @method void setWeChatBillDetails(array $WeChatBillDetails) 设置数据
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class GetWeChatBillDetailsResponse extends AbstractModel
{
    /**
     * @var boolean 是否还有下一页。该字段为true时，需要将NextCursor的值作为入参Cursor继续调用本接口。
     */
    public $HasNextPage;

    /**
     * @var integer 下一页的游标。用于分页。
     */
    public $NextCursor;

    /**
     * @var array 数据
     */
    public $WeChatBillDetails;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param boolean $HasNextPage 是否还有下一页。该字段为true时，需要将NextCursor的值作为入参Cursor继续调用本接口。
     * @param integer $NextCursor 下一页的游标。用于分页。
     * @param array $WeChatBillDetails 数据
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("HasNextPage",$param) and $param["HasNextPage"] !== null) {
            $this->HasNextPage = $param["HasNextPage"];
        }

        if (array_key_exists("NextCursor",$param) and $param["NextCursor"] !== null) {
            $this->NextCursor = $param["NextCursor"];
        }

        if (array_key_exists("WeChatBillDetails",$param) and $param["WeChatBillDetails"] !== null) {
            $this->WeChatBillDetails = [];
            foreach ($param["WeChatBillDetails"] as $key => $value){
                $obj = new WeChatBillDetail();
                $obj->deserialize($value);
                array_push($this->WeChatBillDetails, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
