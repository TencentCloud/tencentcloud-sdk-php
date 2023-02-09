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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeNotebookSessions返回参数结构体
 *
 * @method integer getTotalElements() 获取session总数量
 * @method void setTotalElements(integer $TotalElements) 设置session总数量
 * @method integer getTotalPages() 获取总页数
 * @method void setTotalPages(integer $TotalPages) 设置总页数
 * @method integer getPage() 获取当前页码
 * @method void setPage(integer $Page) 设置当前页码
 * @method integer getSize() 获取当前页数量
 * @method void setSize(integer $Size) 设置当前页数量
 * @method array getSessions() 获取session列表信息
 * @method void setSessions(array $Sessions) 设置session列表信息
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeNotebookSessionsResponse extends AbstractModel
{
    /**
     * @var integer session总数量
     */
    public $TotalElements;

    /**
     * @var integer 总页数
     */
    public $TotalPages;

    /**
     * @var integer 当前页码
     */
    public $Page;

    /**
     * @var integer 当前页数量
     */
    public $Size;

    /**
     * @var array session列表信息
     */
    public $Sessions;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $TotalElements session总数量
     * @param integer $TotalPages 总页数
     * @param integer $Page 当前页码
     * @param integer $Size 当前页数量
     * @param array $Sessions session列表信息
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
        if (array_key_exists("TotalElements",$param) and $param["TotalElements"] !== null) {
            $this->TotalElements = $param["TotalElements"];
        }

        if (array_key_exists("TotalPages",$param) and $param["TotalPages"] !== null) {
            $this->TotalPages = $param["TotalPages"];
        }

        if (array_key_exists("Page",$param) and $param["Page"] !== null) {
            $this->Page = $param["Page"];
        }

        if (array_key_exists("Size",$param) and $param["Size"] !== null) {
            $this->Size = $param["Size"];
        }

        if (array_key_exists("Sessions",$param) and $param["Sessions"] !== null) {
            $this->Sessions = [];
            foreach ($param["Sessions"] as $key => $value){
                $obj = new NotebookSessions();
                $obj->deserialize($value);
                array_push($this->Sessions, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
