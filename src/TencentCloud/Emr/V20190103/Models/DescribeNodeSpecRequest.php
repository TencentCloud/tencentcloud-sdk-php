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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeNodeSpec请求参数结构体
 *
 * @method integer getZoneId() 获取可用区Id，可以通过https://document.capi.woa.com/document/api/1605/76892查询相关信息
 * @method void setZoneId(integer $ZoneId) 设置可用区Id，可以通过https://document.capi.woa.com/document/api/1605/76892查询相关信息
 * @method integer getCvmPayMode() 获取0,按量，1包年包月，99按量+包年包月，错填将不会展示费用信息
 * @method void setCvmPayMode(integer $CvmPayMode) 设置0,按量，1包年包月，99按量+包年包月，错填将不会展示费用信息
 * @method string getNodeType() 获取节点类型,Master,Core,Task,Router,All
 * @method void setNodeType(string $NodeType) 设置节点类型,Master,Core,Task,Router,All
 * @method integer getTradeType() 获取0:旧计费页面,1:新计费页面。 错填，默认为旧计费
 * @method void setTradeType(integer $TradeType) 设置0:旧计费页面,1:新计费页面。 错填，默认为旧计费
 * @method integer getProductId() 获取产品Id，不填为0，则表示所有productId，前台使用必填

44	EMR	V3.5.0
43	EMR	V3.4.0.tlinux
42	EMR	V2.7.0.tlinux
41	DRUID	V1.1.0
67	STARROCKS	V2.2.0
45	DRUID	V1.1.0.tlinux
40	EMRCLOUD	v3.2.0
47	EMR	V4.0.0
48	STARROCKS	V1.2.0
49	STARROCKS	V1.3.0
50	KAFKA	V2.0.0
51	STARROCKS	V1.4.0
52	EMR-TKE	V1.0.0
53	EMR	V3.6.0
54	STARROCKS	V2.0.0
55	EMR-TKE	V1.0.1
56	EMR-TKE	DLCV1.0.0
57	EMR	V2.8.0
58	EMR	V3.6.1
59	SERVERLESS	V1.0.0
60	EMR-TKE	V1.1.0
62	STARROCKS	V2.1.1
63	STARROCKS	V2.1.1.tlinux
64	EMR-TKE	TCCV1.0.0
65	EMR-TKE-AI	V1.0.0
66	RSS	V1.0.0
24	EMR	TianQiong-V1.0.0
3	EMR	V2.0.1.tlinux
4	EMR	V2.1.0
7	EMR	V3.0.0
8	EMR	V3.0.0.tlinux
9	EMR	V2.2.0
11	CLICKHOUSE	V1.0.0
12	CLICKHOUSE	V1.0.0.tlinux
16	EMR	V2.3.0
17	CLICKHOUSE	V1.1.0
18	CLICKHOUSE	V1.1.0.tlinux
19	EMR	V2.4.0
20	EMR	V2.5.0
21	USERCUSTOM	V1.0.0
22	CLICKHOUSE	V1.2.0
39	STARROCKS	V1.1.0
25	EMR	V3.1.0
26	DORIS	V1.0.0
27	KAFKA	V1.0.0
28	EMR	V3.2.0
29	EMR	V2.5.1
30	EMR	V2.6.0
32	DORIS	V1.1.0
33	EMR	V3.2.1
34	EMR	V3.3.0
35	DORIS	V1.2.0
36	STARROCKS	V1.0.0
37	EMR	V3.4.0
38	EMR	V2.7.0
 * @method void setProductId(integer $ProductId) 设置产品Id，不填为0，则表示所有productId，前台使用必填

44	EMR	V3.5.0
43	EMR	V3.4.0.tlinux
42	EMR	V2.7.0.tlinux
41	DRUID	V1.1.0
67	STARROCKS	V2.2.0
45	DRUID	V1.1.0.tlinux
40	EMRCLOUD	v3.2.0
47	EMR	V4.0.0
48	STARROCKS	V1.2.0
49	STARROCKS	V1.3.0
50	KAFKA	V2.0.0
51	STARROCKS	V1.4.0
52	EMR-TKE	V1.0.0
53	EMR	V3.6.0
54	STARROCKS	V2.0.0
55	EMR-TKE	V1.0.1
56	EMR-TKE	DLCV1.0.0
57	EMR	V2.8.0
58	EMR	V3.6.1
59	SERVERLESS	V1.0.0
60	EMR-TKE	V1.1.0
62	STARROCKS	V2.1.1
63	STARROCKS	V2.1.1.tlinux
64	EMR-TKE	TCCV1.0.0
65	EMR-TKE-AI	V1.0.0
66	RSS	V1.0.0
24	EMR	TianQiong-V1.0.0
3	EMR	V2.0.1.tlinux
4	EMR	V2.1.0
7	EMR	V3.0.0
8	EMR	V3.0.0.tlinux
9	EMR	V2.2.0
11	CLICKHOUSE	V1.0.0
12	CLICKHOUSE	V1.0.0.tlinux
16	EMR	V2.3.0
17	CLICKHOUSE	V1.1.0
18	CLICKHOUSE	V1.1.0.tlinux
19	EMR	V2.4.0
20	EMR	V2.5.0
21	USERCUSTOM	V1.0.0
22	CLICKHOUSE	V1.2.0
39	STARROCKS	V1.1.0
25	EMR	V3.1.0
26	DORIS	V1.0.0
27	KAFKA	V1.0.0
28	EMR	V3.2.0
29	EMR	V2.5.1
30	EMR	V2.6.0
32	DORIS	V1.1.0
33	EMR	V3.2.1
34	EMR	V3.3.0
35	DORIS	V1.2.0
36	STARROCKS	V1.0.0
37	EMR	V3.4.0
38	EMR	V2.7.0
 * @method string getSceneName() 获取场景名
 * @method void setSceneName(string $SceneName) 设置场景名
 * @method string getResourceBaseType() 获取类型为ComputeResource和EMR以及默认，默认为EMR
 * @method void setResourceBaseType(string $ResourceBaseType) 设置类型为ComputeResource和EMR以及默认，默认为EMR
 * @method string getComputeResourceId() 获取计算资源id
 * @method void setComputeResourceId(string $ComputeResourceId) 设置计算资源id
 */
class DescribeNodeSpecRequest extends AbstractModel
{
    /**
     * @var integer 可用区Id，可以通过https://document.capi.woa.com/document/api/1605/76892查询相关信息
     */
    public $ZoneId;

    /**
     * @var integer 0,按量，1包年包月，99按量+包年包月，错填将不会展示费用信息
     */
    public $CvmPayMode;

    /**
     * @var string 节点类型,Master,Core,Task,Router,All
     */
    public $NodeType;

    /**
     * @var integer 0:旧计费页面,1:新计费页面。 错填，默认为旧计费
     */
    public $TradeType;

    /**
     * @var integer 产品Id，不填为0，则表示所有productId，前台使用必填

44	EMR	V3.5.0
43	EMR	V3.4.0.tlinux
42	EMR	V2.7.0.tlinux
41	DRUID	V1.1.0
67	STARROCKS	V2.2.0
45	DRUID	V1.1.0.tlinux
40	EMRCLOUD	v3.2.0
47	EMR	V4.0.0
48	STARROCKS	V1.2.0
49	STARROCKS	V1.3.0
50	KAFKA	V2.0.0
51	STARROCKS	V1.4.0
52	EMR-TKE	V1.0.0
53	EMR	V3.6.0
54	STARROCKS	V2.0.0
55	EMR-TKE	V1.0.1
56	EMR-TKE	DLCV1.0.0
57	EMR	V2.8.0
58	EMR	V3.6.1
59	SERVERLESS	V1.0.0
60	EMR-TKE	V1.1.0
62	STARROCKS	V2.1.1
63	STARROCKS	V2.1.1.tlinux
64	EMR-TKE	TCCV1.0.0
65	EMR-TKE-AI	V1.0.0
66	RSS	V1.0.0
24	EMR	TianQiong-V1.0.0
3	EMR	V2.0.1.tlinux
4	EMR	V2.1.0
7	EMR	V3.0.0
8	EMR	V3.0.0.tlinux
9	EMR	V2.2.0
11	CLICKHOUSE	V1.0.0
12	CLICKHOUSE	V1.0.0.tlinux
16	EMR	V2.3.0
17	CLICKHOUSE	V1.1.0
18	CLICKHOUSE	V1.1.0.tlinux
19	EMR	V2.4.0
20	EMR	V2.5.0
21	USERCUSTOM	V1.0.0
22	CLICKHOUSE	V1.2.0
39	STARROCKS	V1.1.0
25	EMR	V3.1.0
26	DORIS	V1.0.0
27	KAFKA	V1.0.0
28	EMR	V3.2.0
29	EMR	V2.5.1
30	EMR	V2.6.0
32	DORIS	V1.1.0
33	EMR	V3.2.1
34	EMR	V3.3.0
35	DORIS	V1.2.0
36	STARROCKS	V1.0.0
37	EMR	V3.4.0
38	EMR	V2.7.0
     */
    public $ProductId;

    /**
     * @var string 场景名
     */
    public $SceneName;

    /**
     * @var string 类型为ComputeResource和EMR以及默认，默认为EMR
     */
    public $ResourceBaseType;

    /**
     * @var string 计算资源id
     */
    public $ComputeResourceId;

    /**
     * @param integer $ZoneId 可用区Id，可以通过https://document.capi.woa.com/document/api/1605/76892查询相关信息
     * @param integer $CvmPayMode 0,按量，1包年包月，99按量+包年包月，错填将不会展示费用信息
     * @param string $NodeType 节点类型,Master,Core,Task,Router,All
     * @param integer $TradeType 0:旧计费页面,1:新计费页面。 错填，默认为旧计费
     * @param integer $ProductId 产品Id，不填为0，则表示所有productId，前台使用必填

44	EMR	V3.5.0
43	EMR	V3.4.0.tlinux
42	EMR	V2.7.0.tlinux
41	DRUID	V1.1.0
67	STARROCKS	V2.2.0
45	DRUID	V1.1.0.tlinux
40	EMRCLOUD	v3.2.0
47	EMR	V4.0.0
48	STARROCKS	V1.2.0
49	STARROCKS	V1.3.0
50	KAFKA	V2.0.0
51	STARROCKS	V1.4.0
52	EMR-TKE	V1.0.0
53	EMR	V3.6.0
54	STARROCKS	V2.0.0
55	EMR-TKE	V1.0.1
56	EMR-TKE	DLCV1.0.0
57	EMR	V2.8.0
58	EMR	V3.6.1
59	SERVERLESS	V1.0.0
60	EMR-TKE	V1.1.0
62	STARROCKS	V2.1.1
63	STARROCKS	V2.1.1.tlinux
64	EMR-TKE	TCCV1.0.0
65	EMR-TKE-AI	V1.0.0
66	RSS	V1.0.0
24	EMR	TianQiong-V1.0.0
3	EMR	V2.0.1.tlinux
4	EMR	V2.1.0
7	EMR	V3.0.0
8	EMR	V3.0.0.tlinux
9	EMR	V2.2.0
11	CLICKHOUSE	V1.0.0
12	CLICKHOUSE	V1.0.0.tlinux
16	EMR	V2.3.0
17	CLICKHOUSE	V1.1.0
18	CLICKHOUSE	V1.1.0.tlinux
19	EMR	V2.4.0
20	EMR	V2.5.0
21	USERCUSTOM	V1.0.0
22	CLICKHOUSE	V1.2.0
39	STARROCKS	V1.1.0
25	EMR	V3.1.0
26	DORIS	V1.0.0
27	KAFKA	V1.0.0
28	EMR	V3.2.0
29	EMR	V2.5.1
30	EMR	V2.6.0
32	DORIS	V1.1.0
33	EMR	V3.2.1
34	EMR	V3.3.0
35	DORIS	V1.2.0
36	STARROCKS	V1.0.0
37	EMR	V3.4.0
38	EMR	V2.7.0
     * @param string $SceneName 场景名
     * @param string $ResourceBaseType 类型为ComputeResource和EMR以及默认，默认为EMR
     * @param string $ComputeResourceId 计算资源id
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
        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("CvmPayMode",$param) and $param["CvmPayMode"] !== null) {
            $this->CvmPayMode = $param["CvmPayMode"];
        }

        if (array_key_exists("NodeType",$param) and $param["NodeType"] !== null) {
            $this->NodeType = $param["NodeType"];
        }

        if (array_key_exists("TradeType",$param) and $param["TradeType"] !== null) {
            $this->TradeType = $param["TradeType"];
        }

        if (array_key_exists("ProductId",$param) and $param["ProductId"] !== null) {
            $this->ProductId = $param["ProductId"];
        }

        if (array_key_exists("SceneName",$param) and $param["SceneName"] !== null) {
            $this->SceneName = $param["SceneName"];
        }

        if (array_key_exists("ResourceBaseType",$param) and $param["ResourceBaseType"] !== null) {
            $this->ResourceBaseType = $param["ResourceBaseType"];
        }

        if (array_key_exists("ComputeResourceId",$param) and $param["ComputeResourceId"] !== null) {
            $this->ComputeResourceId = $param["ComputeResourceId"];
        }
    }
}
