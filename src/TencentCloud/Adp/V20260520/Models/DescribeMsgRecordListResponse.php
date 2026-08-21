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
 * DescribeMsgRecordList返回参数结构体
 *
 * @method boolean getHasMore() 获取<p>是否有更多页</p>
 * @method void setHasMore(boolean $HasMore) 设置<p>是否有更多页</p>
 * @method array getMsgRecordList() 获取<p>消息记录列表</p>
 * @method void setMsgRecordList(array $MsgRecordList) 设置<p>消息记录列表</p>
 * @method string getNextCursor() 获取<p>下一页游标信息</p>
 * @method void setNextCursor(string $NextCursor) 设置<p>下一页游标信息</p>
 * @method string getPrevCursor() 获取<p>上一页游标信息</p>
 * @method void setPrevCursor(string $PrevCursor) 设置<p>上一页游标信息</p>
 * @method string getTotalCount() 获取<p>符合条件的总记录数，用于前端分页显示</p>
 * @method void setTotalCount(string $TotalCount) 设置<p>符合条件的总记录数，用于前端分页显示</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeMsgRecordListResponse extends AbstractModel
{
    /**
     * @var boolean <p>是否有更多页</p>
     */
    public $HasMore;

    /**
     * @var array <p>消息记录列表</p>
     */
    public $MsgRecordList;

    /**
     * @var string <p>下一页游标信息</p>
     */
    public $NextCursor;

    /**
     * @var string <p>上一页游标信息</p>
     */
    public $PrevCursor;

    /**
     * @var string <p>符合条件的总记录数，用于前端分页显示</p>
     */
    public $TotalCount;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param boolean $HasMore <p>是否有更多页</p>
     * @param array $MsgRecordList <p>消息记录列表</p>
     * @param string $NextCursor <p>下一页游标信息</p>
     * @param string $PrevCursor <p>上一页游标信息</p>
     * @param string $TotalCount <p>符合条件的总记录数，用于前端分页显示</p>
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
        if (array_key_exists("HasMore",$param) and $param["HasMore"] !== null) {
            $this->HasMore = $param["HasMore"];
        }

        if (array_key_exists("MsgRecordList",$param) and $param["MsgRecordList"] !== null) {
            $this->MsgRecordList = [];
            foreach ($param["MsgRecordList"] as $key => $value){
                $obj = new MsgRecord();
                $obj->deserialize($value);
                array_push($this->MsgRecordList, $obj);
            }
        }

        if (array_key_exists("NextCursor",$param) and $param["NextCursor"] !== null) {
            $this->NextCursor = $param["NextCursor"];
        }

        if (array_key_exists("PrevCursor",$param) and $param["PrevCursor"] !== null) {
            $this->PrevCursor = $param["PrevCursor"];
        }

        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
