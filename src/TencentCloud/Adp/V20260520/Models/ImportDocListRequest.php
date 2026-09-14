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
 * ImportDocList请求参数结构体
 *
 * @method array getDocList() 获取<p>待导入文档列表（数量：1~20）</p>
 * @method void setDocList(array $DocList) 设置<p>待导入文档列表（数量：1~20）</p>
 * @method string getKbId() 获取<p>知识库 ID</p>
 * @method void setKbId(string $KbId) 设置<p>知识库 ID</p>
 */
class ImportDocListRequest extends AbstractModel
{
    /**
     * @var array <p>待导入文档列表（数量：1~20）</p>
     */
    public $DocList;

    /**
     * @var string <p>知识库 ID</p>
     */
    public $KbId;

    /**
     * @param array $DocList <p>待导入文档列表（数量：1~20）</p>
     * @param string $KbId <p>知识库 ID</p>
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
        if (array_key_exists("DocList",$param) and $param["DocList"] !== null) {
            $this->DocList = [];
            foreach ($param["DocList"] as $key => $value){
                $obj = new DocImportSpec();
                $obj->deserialize($value);
                array_push($this->DocList, $obj);
            }
        }

        if (array_key_exists("KbId",$param) and $param["KbId"] !== null) {
            $this->KbId = $param["KbId"];
        }
    }
}
